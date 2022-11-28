<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Something Vintage</title>
	<?php include "parts/meta.php"; ?>
</head>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container" id="#typography">
    	
    	<div class="card soft" id="paragraphs">
    		<h3>Welcome to Something Vintage!</h3>
    		<p>Something Vintage is a home of vintage clothing collection. We are not just a typical ecommerce site for online shopping. We pay tribute to every piece of clothing from our history. Every clothing has its own story.</p>
    		<p>Optio reprehenderit expedita corporis ipsam quos illum iste velit debitis quas cum. Impedit, dolores quisquam asperiores totam voluptate quia unde iusto, similique quae enim. Doloribus nemo esse provident dicta iure.</p>
    		<p>Iste ut tempore amet doloribus modi. Perferendis in reprehenderit tempore soluta minus labore autem adipisci, eveniet natus, perspiciatis repellendus illo deleniti blanditiis, modi, eligendi! Possimus, sunt. Sunt animi itaque, exercitationem!</p>
    	</div>
    </div>

    <div class="container" id="viewwindow">
  
        <div class="view-window" style="background-image: url(./img/vintage.jpg);">
        	
        </div>

  <h3>Featured Fashion of The Month</h3>

        <div class="container">
    <div class="card soft">
      <h2>Winter Collection</h2>

      <?php

      include_once "lib/php/functions.php";
      include_once "parts/templates.php";

      $result = makeQuery(
        makeConn(),
        "
        SELECT *
        FROM `products`
        ORDER BY `date_create` 
        LIMIT 6
        "
      );

      echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

      ?>







</body>
</html>
