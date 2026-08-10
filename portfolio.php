<?php
$pageTitle = 'My Portfolio | Vipin Cheriyanveetil – Full Stack Developer Projects';
$pageDescription = 'Browse my portfolio of web applications built with React, Vue.js, Angular, Python, PHP, and Node.js.';
$canonicalPath = 'portfolio.php';
?>
<?php include("includes/header.php"); ?>
<h1>My Projects</h1>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
  <div class="col">
    <a href="/project/goodtools.php" class="project-card">
      <img src="img/projects/goodtools.png" class="project-thumb" alt="Good Tools project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">Good Tools</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">My collection of the most used AI and non-AI tools.</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/dbpromoter.php" class="project-card">
      <img src="img/projects/dbpromoter.png" class="project-thumb" alt="DB Promoter project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">DB Promoter</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">A powerfull web app in React for Neo4j database promotion.</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/powerportal.php" class="project-card">
      <img src="img/projects/powerportal.png" class="project-thumb" alt="Power Portal project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">Power Portal</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">A powerfull dashboard with beautiful widgets showcasing different type of tabular or graphical representation of data. This product is well supported by highcharts</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/gowatt.php" class="project-card">
      <img src="img/projects/gowatt.png" class="project-thumb" alt="gowatt project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">gowatt</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">A web dashboard developed in vue.js with responsive look and feel . This is for our engineer to compare the hotel power usages between different hotels and functional groups. Well supported by zoomcharts</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/allyone.php" class="project-card">
      <img src="img/projects/allyone.png" class="project-thumb" alt="Allyone project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">Allyone</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">A responsive web application developed to help an organisation in USA in their business field of helping autism kids.</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/taskoooo.php" class="project-card">
      <img src="img/projects/taskoooo.png" class="project-thumb" alt="Taskoooo project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">Taskoooo</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">This is a web application done in python and flask as a solution for task management.</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/ebooqs.php" class="project-card">
      <img src="img/projects/ebooqs.png" class="project-thumb" alt="ebooqs project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">ebooqs</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">This is a beautiful web application for a web store of ebooks. users can come search and download them.</p>
      </div>
    </a>
  </div>

  <div class="col">
    <a href="/project/donglinked.php" class="project-card">
      <img src="img/projects/donglinked.png" class="project-thumb" alt="DongLinked project thumbnail">
      <div class="project-overlay">
        <h5 class="project-overlay-title">DongLinked</h5>
        <hr class="project-overlay-divider">
        <p class="project-overlay-text">An SMS solution developed in C# winforms . The SMS are sent and received through a dongle with a sim card in it.</p>
      </div>
    </a>
  </div>
</div>

<?php include("includes/footer.php"); ?>
