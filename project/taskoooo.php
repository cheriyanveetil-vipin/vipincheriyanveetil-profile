<?php
$pageTitle = 'Taskoooo Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = 'Taskoooo: a Python and Flask task management application with reporting, built with a responsive Bootstrap UI.';
$canonicalPath = 'project/taskoooo.php';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>Taskoooo</h1>
<blockquote class="blockquote">
  <p class="mb-0">This is a beautiful web application done in Python and Flask. This appliciation is made responsive using bootstrap and Jquery. This is a solution to task management for the engineers to track and manage the daily tasks. This has all the features needed to track the progress of the task and can generate reports too. </p>
</blockquote>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-warning">Python</button>
  <button type="button" class="btn btn-dark">Flask</button>
  <button type="button" class="btn btn-success">Mysql</button>
  <button type="button" class="btn btn-danger">Bootstrap</button>
  <button type="button" class="btn btn-primary">jQuery</button>
  <button type="button" class="btn btn-info">JavaScript</button>
</p>
<div id="taskooooCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/taskoooo/1.JPG" class="d-block w-100" alt="Taskoooo screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/taskoooo/2.JPG" class="d-block w-100" alt="Taskoooo screenshot 2"></div>
    <div class="carousel-item"><img src="/img/projects/taskoooo/3.JPG" class="d-block w-100" alt="Taskoooo screenshot 3"></div>
    <div class="carousel-item"><img src="/img/projects/taskoooo/4.JPG" class="d-block w-100" alt="Taskoooo screenshot 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#taskooooCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#taskooooCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
