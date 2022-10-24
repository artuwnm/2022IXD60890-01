<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Product Items</title>

	<?php include "parts/meta.php"; ?>

</head>

<body>

	<!-- Navigation Bar -->

	<?php include "parts/navbar.php";?>


	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<p>This is Item # <?=$_GET['id']?></p>

		</div>
	</div>


</body>
</html>