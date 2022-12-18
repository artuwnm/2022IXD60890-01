<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
</head>
<body class="flush">
	
	<?php include "parts/navbar.php"; ?>
<div class="slider-wrap  J_sliderWrap">
		<div class="slider">
			<ul class="slider-list">
				<li class="item cur">
				<img class="item-img" src="./img/rmindigo.jpg" alt="" /></li>
				<li class="item">
				<img class="item-img" src="./img/jk.jpg" alt="" /></li>
				<li class="item">
				<img class="item-img" src="./img/anti.jpg" alt="" /></li>
				<li class="item">
				<img class="item-img" src="./img/bp.jpg" alt="" /></li>
			</ul>
		</div>
		<div class="pic">
			<div class="yuan">
				<i class="yuan-item cur"></i>
				<i class="yuan-item"></i>
				<i class="yuan-item"></i>
				<i class="yuan-item"></i>
			</div>
		</div>

		<div class="btn-group">
			<div class="btn-left">&lt;</div>
			<div class="btn-right">&gt;</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script src="js/mySlider.js"></script>
	<script>
		new Slider({
			oSliderWrap: $('.J_sliderWrap'),
			sliderItems: $('.item'),
			yuan: $('.yuan'),
			yuanItems: $('.yuan-item'),
			btnGroupLeft: $('.btn-left'),
			btnGroupRight: $('.btn-right')
		}).init();
	</script>
		</div>		
	</div>
	
	<div class="container">
		<article id="article1" class="article card hard">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>IPDEOK</h2>
				</div>

				<div class="flex-none">
					<small>6:13am</small>
				</div>
			</div>
			<div class="article-body">
				<p>Welcome to Ipdeok!</p>
				<p>Ipdeok is a member of 2022 HANTEO FAMILY</p>
				<p>Purchased items at the store ill cetainly be reflected on HANTEO CHART.</p>
			</div>
		</article>
			<h2>Latest Drop</h2>
		<?php recommendedCategory("album"); ?>
	</div>
		
		<div class="container">
		<article id="article2" class="article card soft">
			<h2>K-POP NEWS</h2>
			<div class="article-body card soft">
				<h3>BTS' Jungkook 'Dreamers' becomes highest debut K-pop soloist on global Spotify</h3>
				<p><img class="jk" src="img/dreamers_thumb.jpg" alt="alt text" style="float: left">According to Spotify on November 21, BTS member Jungkook's new single Dreamers debuted at No. 2.</p>
				<p>The K-pop member set new records with a total of 4.8 million streams, his highest-charting song as well.</p>
				<p>With this, Jungkook's new track scored the highest debut for a FIFA World Cup song. </p>
			</div>
		</article>
	</div>
	<div class="view-window" style="background-image: url('img/BTS.jpeg');">
		
	</div>
	<div class="container">
		<article id="article3" class="article card soft">
			<h2>NEW ALBUMS</h2>
			<div class="article-body card soft">
				<h3>RM 1st Solo Album ‘Indigo’</h3>
				<p><img class="jk" src="img/indigo_set_thumb.jpg" alt="alt text" style="float: left">RM(BTS)</p>
				<p>Title Track:"Wild Flower (with youjeen)"</p>
				<p>Release date: December 2, 2022</p>
			</div>
		</article>

		<div class="container">
		<h2>Latest Merch</h2>
		<?php recommendedCategory("merch"); ?>
		</div>
		
		<article id="article4" class="article card soft">
			<h2>K-POP WORLD TOUR 2022</h2>
			<div class="article-body card soft">
				<h3>BLACKPINK</h3>
				<p><img class="jk" src="img/bptour.jpg" alt="alt text" style="float: left">Tour: BLACKPINK "BORN PINK" World Tour</p>
				<p>Date: December 1, 2022 - June 21, 2023</p>
				<p>Countries: the UK, Spain, Germany, France, the Netherlands, Thailand, Hong Kong, Saudi Arabia, UAE, Malaysia, Indonesia, Taiwan, the Philippines, Singapore, Australia</p>
			</div>
		</article>
	</div>

</body>
</html>