<?php
$pageTitle = 'Good Tools Project | Vipin Cheriyanveetil Portfolio';
$pageDescription = "GoodTools: a free Next.js toolkit combining everyday utilities with AI-powered tools, built by Vipin Cheriyanveetil.";
$canonicalPath = 'project/goodtools.php';
$ogImage = 'img/projects/goodtools.png';
?>
<?php include(__DIR__ . '/../includes/header.php'); ?>
<h1>Good Tools</h1>
<blockquote class="blockquote">
  <p class="mb-0">My collection of the most used AI and non-AI tools — a free toolkit built with Next.js that combines everyday utilities like a percentage calculator, JSON formatter, QR code generator, and URL-to-PDF/image converter with AI-powered tools including a conversational AI voice agent, an LLM-based text analyzer, a tone/grammar rewriter, and a receipt summarizer.</p>
</blockquote>
<p>
  <a href="https://goodtools.onrender.com/tools/list" target="_blank" rel="noopener" class="btn btn-outline-primary">
    Visit Good Tools <i class="fa fa-external-link ms-1"></i>
  </a>
</p>
<p class="lead"><strong>Technologies</strong></p>
<p>
  <button type="button" class="btn btn-dark">Next.js</button>
  <button type="button" class="btn btn-danger">LLM</button>
  <button type="button" class="btn btn-warning">JavaScript</button>
  <button type="button" class="btn btn-primary">TypeScript</button>
</p>
<div id="goodtoolsCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="/img/projects/goodtools/1.png" class="d-block w-100" alt="Good Tools screenshot 1"></div>
    <div class="carousel-item"><img src="/img/projects/goodtools/2.png" class="d-block w-100" alt="Good Tools screenshot 2"></div>
    <div class="carousel-item"><img src="/img/projects/goodtools/3.png" class="d-block w-100" alt="Good Tools screenshot 3"></div>
    <div class="carousel-item"><img src="/img/projects/goodtools/4.png" class="d-block w-100" alt="Good Tools screenshot 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#goodtoolsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#goodtoolsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
