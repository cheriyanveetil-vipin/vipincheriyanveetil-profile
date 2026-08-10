<?php
$pageTitle = 'DB Promoter Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = 'DB Promoter: a React.js and Python Flask tool for Neo4j administrators to promote, back up, and restore databases via AWS S3.';
$canonicalPath = 'project/dbpromoter.php';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>DB Promoter</h1>
<blockquote class="blockquote">
  <p class="mb-0">A web app developed in React.js with responsive look and feel . This is a tool for Neo4j adminstrators to easy promote database beyween servers or backup or restore a database. This application is Well supported by Bootstrap, jquery ect. This application also uses AWS buckets to store and read the database backups. </p>
</blockquote>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-warning">React.js</button>
  <button type="button" class="btn btn-dark">Python + Flask API</button>
  <button type="button" class="btn btn-success">Neo4j</button>
  <button type="button" class="btn btn-danger">Bootstrap</button>
  <button type="button" class="btn btn-primary">jQuery</button>
  <button type="button" class="btn btn-danger">AWS S3</button>
  <button type="button" class="btn btn-info">JavaScript</button>
</p>
<div id="dbpromoterCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/dbpromoter/1.JPG" class="d-block w-100" alt="DB Promoter screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/dbpromoter/2.JPG" class="d-block w-100" alt="DB Promoter screenshot 2"></div>
    <div class="carousel-item"><img src="/img/projects/dbpromoter/3.JPG" class="d-block w-100" alt="DB Promoter screenshot 3"></div>
    <div class="carousel-item"><img src="/img/projects/dbpromoter/4.JPG" class="d-block w-100" alt="DB Promoter screenshot 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#dbpromoterCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#dbpromoterCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
