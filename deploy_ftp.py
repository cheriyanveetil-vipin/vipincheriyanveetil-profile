#!/usr/bin/env python3
"""
Deploy this site over plain FTP: wipes everything inside the remote
public_html, then uploads the local repo fresh.

Requires these environment variables to be set before running:
  FTP_HOST      e.g. vipincheriyanveetil.in
  FTP_USER      e.g. ftp@vipincheriyanveetil.in
  FTP_PASSWORD

Usage:
  python3 deploy_ftp.py          # wipes + uploads for real
  python3 deploy_ftp.py --dry-run  # only prints what it would do
  python3 deploy_ftp.py --list     # only lists what's currently on the server
"""
import ftplib
import os
import sys

HOST = os.environ.get("FTP_HOST")
USER = os.environ.get("FTP_USER")
PASSWORD = os.environ.get("FTP_PASSWORD")
REMOTE_ROOT = "/"
# REMOTE_ROOT is relative to the FTP session's own chroot. On this host that
# session lands directly inside the site's document root, whose absolute
# path on the server is:
REMOTE_ROOT_ABSOLUTE = "/home/hjflfnah/domains/vipincheriyanveetil.in/public_html/"
LOCAL_ROOT = os.path.dirname(os.path.abspath(__file__))
DRY_RUN = "--dry-run" in sys.argv
LIST_ONLY = "--list" in sys.argv

EXCLUDE_NAMES = {
    ".git", ".DS_Store", "README.md", "Dockerfile", "docker-compose.yml",
    "docker_commands.txt", ".dockerignore", "composer.json", "deploy_ftp.py",
    ".gitignore", "how-to-deploy-to-ftp.txt",
}

# Top-level remote names to never touch (delete or otherwise) during the wipe
# step, even though they aren't part of the local repo.
REMOTE_PRESERVE_NAMES = {"ftp"}


def join_remote(a, b):
    return "/" + "/".join(p for p in (a.strip("/"), b.strip("/")) if p)


def list_recursive(ftp, path, count=None):
    if count is None:
        count = {"files": 0, "dirs": 0}
    try:
        ftp.cwd(path)
    except ftplib.error_perm as e:
        print(f"  WARN: could not open {path}: {e}")
        return count
    try:
        names = sorted(ftp.nlst())
    except ftplib.error_perm:
        names = []
    for name in names:
        if name in (".", ".."):
            continue
        child = join_remote(path, name)
        try:
            ftp.cwd(child)
            ftp.cwd(path)
            count["dirs"] += 1
            print(f"  [dir]  {child}/")
            list_recursive(ftp, child, count)
        except ftplib.error_perm:
            count["files"] += 1
            print(f"  [file] {child}")
    return count


def rm_recursive(ftp, path):
    try:
        ftp.cwd(path)
    except ftplib.error_perm:
        return
    try:
        names = ftp.nlst()
    except ftplib.error_perm:
        names = []
    is_top_level = path.strip("/") == REMOTE_ROOT.strip("/")
    for name in names:
        if name in (".", ".."):
            continue
        if is_top_level and name in REMOTE_PRESERVE_NAMES:
            print(f"  [preserved, not touched] {join_remote(path, name)}")
            continue
        child = join_remote(path, name)
        if DRY_RUN:
            print(f"  [dry-run] would delete {child}")
            continue
        try:
            ftp.delete(name)
            print(f"  deleted file {child}")
        except ftplib.error_perm:
            rm_recursive(ftp, child)
            ftp.cwd(path)
            try:
                ftp.rmd(name)
                print(f"  removed dir  {child}")
            except ftplib.error_perm as e:
                print(f"  WARN: could not remove dir {child}: {e}")
    if not DRY_RUN:
        ftp.cwd("/")


def mkdirs(ftp, remote_dir):
    if DRY_RUN:
        return
    parts = remote_dir.strip("/").split("/")
    path = ""
    for part in parts:
        path += "/" + part
        try:
            ftp.mkd(path)
        except ftplib.error_perm:
            pass


def upload_dir(ftp, local_dir, remote_dir):
    mkdirs(ftp, remote_dir)
    for entry in sorted(os.listdir(local_dir)):
        if entry in EXCLUDE_NAMES:
            continue
        local_path = os.path.join(local_dir, entry)
        remote_path = join_remote(remote_dir, entry)
        if os.path.isdir(local_path):
            upload_dir(ftp, local_path, remote_path)
        else:
            if DRY_RUN:
                print(f"  [dry-run] would upload {remote_path}")
                continue
            with open(local_path, "rb") as f:
                print(f"  uploading {remote_path}")
                ftp.storbinary(f"STOR {remote_path}", f)


def main():
    if not (HOST and USER and PASSWORD):
        print("ERROR: set FTP_HOST, FTP_USER, FTP_PASSWORD environment variables first.")
        sys.exit(1)

    print("=" * 60)
    if LIST_ONLY:
        print("LIST REMOTE FILES (nothing will change)")
    else:
        print("DEPLOY PLAN" + (" (DRY RUN - nothing will change)" if DRY_RUN else ""))
    print("=" * 60)
    print(f"  Local source        : {LOCAL_ROOT}")
    print(f"  FTP host            : {HOST}")
    print(f"  FTP user            : {USER}")
    print(f"  Remote destination  : {REMOTE_ROOT}  (relative to the FTP session)")
    print(f"  Remote destination  : {REMOTE_ROOT_ABSOLUTE}  (absolute path on server)")
    print("=" * 60 + "\n")

    print(f"Connecting to {HOST} as {USER} ...")
    ftp = ftplib.FTP(HOST, timeout=30)
    ftp.login(USER, PASSWORD)
    print("Connected.\n")

    if LIST_ONLY:
        print(f"Listing everything under {HOST}:{REMOTE_ROOT} ({REMOTE_ROOT_ABSOLUTE})\n")
        counts = list_recursive(ftp, REMOTE_ROOT)
        ftp.quit()
        print(f"\n{counts['files']} files, {counts['dirs']} directories.")
        return

    print(f"Step 1: DELETE everything under:")
    print(f"          {HOST}:{REMOTE_ROOT}  ({REMOTE_ROOT_ABSOLUTE})")
    print(f"        {'(dry run - listing only)' if DRY_RUN else ''}")
    rm_recursive(ftp, REMOTE_ROOT)

    print(f"\nStep 2: UPLOAD files")
    print(f"          from : {LOCAL_ROOT}")
    print(f"          to   : {HOST}:{REMOTE_ROOT}  ({REMOTE_ROOT_ABSOLUTE})")
    print(f"        {'(dry run - listing only)' if DRY_RUN else ''}")
    upload_dir(ftp, LOCAL_ROOT, REMOTE_ROOT)

    ftp.quit()
    print("\nDone.")


if __name__ == "__main__":
    main()
