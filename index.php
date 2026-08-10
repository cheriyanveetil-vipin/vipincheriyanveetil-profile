<?php
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

$pageTitle = 'About Me | Vipin Cheriyanveetil – AI Full Stack Developer';
$pageDescription = 'About Vipin Cheriyanveetil, an AI Full Stack Developer with 16+ years of experience building AI-powered products, LLM integrations, and full stack web applications.';
$canonicalPath = 'index.php';
?>
<?php include("includes/header.php"); ?>
<?php include("includes/homepage.php"); ?>
<?php include("includes/footer.php"); ?>
