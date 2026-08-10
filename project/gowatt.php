<?php
$pageTitle = 'gowatt Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = 'gowatt: a React and Python Flask dashboard for comparing hotel power usage across properties, powered by ZoomCharts.';
$canonicalPath = 'project/gowatt.php';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>gowatt</h1>
<blockquote class="blockquote">
  <p class="mb-0">A web dashboard developed in React with responsive look and feel . This is for our engineer to compare the hotel power usages between different hotels and functional groups. This application is Well supported by zoomcharts which has varierty of options to toggle between Yearly, Monthly, Weekly, Daily, Hourly, Minutely views. The REST api is developed in Python and flask</p>
</blockquote>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-warning">React</button>
  <button type="button" class="btn btn-dark">Python Flask Web API</button>
  <button type="button" class="btn btn-success">Mysql</button>
  <button type="button" class="btn btn-danger">Bootstrap</button>
  <button type="button" class="btn btn-primary">jQuery</button>
  <button type="button" class="btn btn-danger">Zoom Charts</button>
  <button type="button" class="btn btn-info">Highcharts</button>
</p>
<div id="gowattCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/gowatt/1.JPG" class="d-block w-100" alt="gowatt screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/gowatt/2.JPG" class="d-block w-100" alt="gowatt screenshot 2"></div>
    <div class="carousel-item"><img src="/img/projects/gowatt/3.JPG" class="d-block w-100" alt="gowatt screenshot 3"></div>
    <div class="carousel-item"><img src="/img/projects/gowatt/4.JPG" class="d-block w-100" alt="gowatt screenshot 4"></div>
    <div class="carousel-item"><img src="/img/projects/gowatt/5.JPG" class="d-block w-100" alt="gowatt screenshot 5"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#gowattCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#gowattCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
