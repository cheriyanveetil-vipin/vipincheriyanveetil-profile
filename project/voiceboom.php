<?php
// NOTE: this page currently duplicates powerportal.php's content — looks like leftover
// copy-paste from another project page rather than real VoiceBoom content. Left as-is
// since it isn't linked from navigation; canonical + noindex point search engines at
// powerportal.php to avoid a duplicate-content penalty. Worth revisiting the copy here.
$pageTitle = 'Power Portal Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = 'A web dashboard for analysing hotel energy usage and cost savings.';
$canonicalPath = 'project/powerportal.php';
$pageRobots = 'noindex,follow';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>Power Portal</h1>
<blockquote class="blockquote">
  <p class="mb-0">A web dashboard developed in vue.js with responsive look and feel . This is for our customers engineers to look and analyse the energy usage within their hotel primises. The dashboard also helps them understand the cost savings they made and helps them all measures to reduce their power usage and can look at various types of charts and analysis. This application is Well supported by highcharts, Bootstrap, jquery ect. </p>
</blockquote>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-warning">Vue.js</button>
  <button type="button" class="btn btn-dark">PHP Slim Web API</button>
  <button type="button" class="btn btn-success">Mysql</button>
  <button type="button" class="btn btn-danger">Bootstrap</button>
  <button type="button" class="btn btn-primary">jQuery</button>
  <button type="button" class="btn btn-danger">Highcharts</button>
  <button type="button" class="btn btn-info">JavaScript</button>
</p>
<div id="voiceboomCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/powerportal/1.JPG" class="d-block w-100" alt="Screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/2.JPG" class="d-block w-100" alt="Screenshot 2"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/3.JPG" class="d-block w-100" alt="Screenshot 3"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/4.JPG" class="d-block w-100" alt="Screenshot 4"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/5.JPG" class="d-block w-100" alt="Screenshot 5"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/6.JPG" class="d-block w-100" alt="Screenshot 6"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/7.JPG" class="d-block w-100" alt="Screenshot 7"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/8.JPG" class="d-block w-100" alt="Screenshot 8"></div>
    <div class="carousel-item"><img src="/img/projects/powerportal/9.JPG" class="d-block w-100" alt="Screenshot 9"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#voiceboomCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#voiceboomCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
