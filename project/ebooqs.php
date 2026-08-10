<?php
$pageTitle = 'ebooqs Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = 'ebooqs: an AngularJS, PHP Slim, and MySQL web store for browsing and downloading ebooks.';
$canonicalPath = 'project/ebooqs.php';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>ebooqs</h1>
<blockquote class="blockquote">
  <p class="mb-0">This is a beautiful application done in angularjs, bootstrap and jquery. This app is to display ebooks and help the users to search and download them.</p>
</blockquote>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-warning">Angular</button>
  <button type="button" class="btn btn-dark">PHP + Slim</button>
  <button type="button" class="btn btn-success">Mysql</button>
  <button type="button" class="btn btn-danger">Bootstrap</button>
  <button type="button" class="btn btn-danger">jQuery</button>
</p>
<div id="ebooqsCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/ebooqs/1.JPG" class="d-block w-100" alt="ebooqs screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/ebooqs/2.JPG" class="d-block w-100" alt="ebooqs screenshot 2"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#ebooqsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#ebooqsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
