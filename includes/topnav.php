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
      <nav class="l-navbar l-navlinks flex flex-center just-between flex-wrap">
        <a href="/"><h1 class="brand-light l-float-l opacity-hover-opaque">AffCo.</h1></a>
        <ul class="l-inline l-float-r">
          <?php include('includes/main-nav.php'); ?>
        </ul>
      </nav>
    </div>
