<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Something Vintage</title>
	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">

  <?php include "parts/navbar.php"; ?>

  <div class="container" id="#typography">
    	
    	<div class="card soft" id="paragraphs">
    		<h3>Welcome to Something Vintage!</h3>
    		<p>Something Vintage is a home of vintage clothing collection. We are not just a typical ecommerce site for online shopping. We pay tribute to every piece of clothing from our history. Every clothing has its own story.</p>
    		<p>Every collection is collected by our designers who have rich knowledge when it comes to history clothing. We want our buyers to know that the clothings we selected by hands have meanings and are referenced from the correct era.  </p>
    		<p>Enjoy shopping! Express yourself through our collections!</p>
    	</div>
    </div>

    <div class="container" id="viewwindow">
  
        <div class="view-window" style="background-image: url(./img/vintage.jpg);">
        	
        </div>

  <h3>Featured Fashion of The Month</h3>

  <div class="container">
    <h2>Latest Collection</h2>
    <?php recommendedCategory("1950s"); ?>
    <h2>Latest Summber Collection</h2>
    <?php recommendedCategory("1980s"); ?>
  </div>






</body>
</html>