<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Barbells and Brews</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header>
  <?php 
    include("nav.php");
  ?>

  <div class="carousel fade" data-ride="carousel" id="featured">

    <ol class="carousel-indicators">
    </ol>

    <div class="carousel-inner fullheight">
      <div class="item"><img src="images/carousel-backdrop.jpg" alt="Backdrop"></div>
      <div class="item"><img src="images/carousel-warmup.jpg" alt="Warmup Area"></div>
      <div class="item"><img src="images/carousel-mugs.jpg" alt="Mugs"></div>  
	  <div class="item"><img src="images/carousel-people.jpg" alt="people"></div> 	
	  <div class="item"><img src="images/carousel-flex.jpg" alt="people"></div> 
    </div><!-- carousel-inner -->

    <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#featured" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div><!-- featured carousel -->
</header>

<div class="main">
  <div class="page" id="mission">
    <div class="content container">
      <h2>Our Mission</h2>      
      <div class="row">
        <p class="col-md-5 col-md-offset-1">Barbells and Brews is an innovative weightlifting event that strives to provide an unbeatable atmosphere by combining our common passion for the barbell, coffee, and beer.</p>
        <p class="col-md-5">We strive to provide lifters and spectators with the best MC, music, and breweries. We support local businesses in the fitness community by providing them with exposure to local athletes and fitness enthusiasts.</p>
      </div><!-- row -->
    </div><!-- content container -->
  </div><!-- mission page -->

 <?php 
    include("footer.php");
 ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>
