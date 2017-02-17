<?php include('includes/details.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="l-navbar-fixed-top">
      <nav class="l-navbar">
        <a href="/"><h1 class="brand-light opacity-hover-opaque l-float-l"><?php echo $coname;?></h1></a>
        <input type="checkbox" id="nav" /><label for="nav"></label>
        <ul>
          <?php include('includes/main-nav.html'); ?>
        </ul>
      </nav>
    </div>
