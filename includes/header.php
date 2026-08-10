<?php
$siteUrl = 'https://www.vipincheriyanveetil.in';

$pageTitle = $pageTitle ?? 'Vipin Cheriyanveetil | AI Full Stack Developer';
$pageDescription = $pageDescription ?? 'Vipin Cheriyanveetil is an AI Full Stack Developer specializing in generative AI, LLM integration, Python, React, Node.js, Flask, and Django.';
$canonicalPath = $canonicalPath ?? 'index.php';
$canonicalUrl = $siteUrl . '/' . ltrim($canonicalPath, '/');
$ogImage = $siteUrl . '/' . ltrim($ogImage ?? 'img/about.jpg', '/');
$pageRobots = $pageRobots ?? 'index,follow';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="keywords" content="AI Full Stack Developer, Generative AI, LLM, OpenAI API, Python, TypeScript, React, Node.js, Flask, Django, Next.js, Portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="<?php echo htmlspecialchars($pageRobots); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vipin Cheriyanveetil">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <!-- Twitter card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <!-- Bootstrap 5 CSS (jsDelivr CDN, pinned + SRI-verified)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="/img/favicon.png">
</head>
<body class="d-flex flex-column min-vh-100">
  <!--   *** TOP NAVBAR ***-->
  <header class="site-header sticky-top">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="/index.php">Vipin Cheriyanveetil <span class="badge rounded-pill navbar-brand-tag">AI Full Stack Developer</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="/index.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/portfolio.php" class="nav-link">Portfolio</a></li>
            <li class="nav-item"><a href="/resume.php" class="nav-link">Resume</a></li>
            <li class="nav-item"><a href="/contact.php" class="nav-link">Get in touch</a></li>
            <li class="nav-item"><a href="/blog.php" class="nav-link">Blog Posts</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--   *** MAIN CONTENT ***-->
  <main class="flex-grow-1 white-background">
    <div class="container">
      <div class="content-column-content">
