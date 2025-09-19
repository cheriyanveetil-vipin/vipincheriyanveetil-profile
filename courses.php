<?php include("includes/header.php"); ?>

<div class="col-md-8 col-lg-10 content-column white-background">
  <div class="small-navbar d-flex d-md-none">
    <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary">
      <i class="fa fa-align-left mr-2"></i>Menu
    </button>
    <h1 class="small-navbar-heading">
      <a href="index.php">Go home</a>
    </h1>
  </div>

  <h1>Courses</h1>

  <p>
    Hello, I like teaching or tutoring too. We are a small 3 member team including my other
    technical friends. We are into programming from more than 10 years of diverse experience
    and are skilled in various technologies. We have taught very countable students in the
    last six months and we love to continue helping people who love programming. We have a
    set of skills that we are good at and we love sharing our knowledge with others.
  </p>
  <p>
    If you like to learn any of the below technologies, please email to
    <strong>vipinc.007@gmail.com</strong>
  </p>

  <div class="grid row">

    <div class="col-md-6 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/react.PNG" alt="Vipin Cheriyanveetil : Learn React" class="img-fluid">
          <h5 class="card-title">React</h5>
          <p class="card-text">A JavaScript library for building user interfaces</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/vue.png" alt="Vipin Cheriyanveetil : Learn vue.js" class="img-fluid">
          <h5 class="card-title">Vue.js</h5>
          <p class="card-text">The Progressive JavaScript Framework</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/angular.png" alt="Vipin Cheriyanveetil : Learn angular" class="img-fluid">
          <h5 class="card-title">Angular</h5>
          <p class="card-text">The structural framework for dynamic web apps</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/aspdotnetmvc.png" alt="Vipin Cheriyanveetil : Learn asp.net MVC" class="img-fluid">
          <h5 class="card-title">ASP.NET MVC</h5>
          <p class="card-text">A web framework for creating web applications</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/iOS.png" alt="Vipin Cheriyanveetil : Learn iOS Development" class="img-fluid">
          <h5 class="card-title">iOS</h5>
          <p class="card-text">Master the skills to create stunning iOS Apps.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/python.png" alt="Vipin Cheriyanveetil : Learn Python Scripting" class="img-fluid">
          <h5 class="card-title">Python</h5>
          <p class="card-text">Master the skills to automate manual tasks.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-lg-3 grid-item">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <img src="img/course/flask.png" alt="Vipin Cheriyanveetil : Learn Flask Programming" class="img-fluid">
          <h5 class="card-title">Flask</h5>
          <p class="card-text">Learn to create web applications in python using flask</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
if (isset($_GET['r'])) {
?>
  <script>
    setTimeout(function() {
      window.location.href = "courses.php";
    }, 1000);
  </script>
<?php
}
?>

<?php include("includes/footer.php"); ?>
