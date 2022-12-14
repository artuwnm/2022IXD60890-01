<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Notes</title>
</head>

<body>
	<?php

	echo "<div>Hello World</div>";
	echo "<div>Goodbye World</div>";

	// Variables
	$a = 5;

	echo "$a";

	// String Interpolation
	echo "<div>I have $a things.</div>"; //"" is for the smart string
	echo '<div>I have $a things.</div>'; //'' is for simple string


	// Number (in javascript and php, it's not important about the difference between integer and float. They are all numbers.)

	// Integer
	$b = 15;

	// Float
	$b = 0.576;

	$b = 10; //10 is literal number.


	// String
	$name = "Yerguy2";

	// Boolean Values
	$isOn = true; //something is on or off, yes or no


	// Math
	// PEMDAS
	echo 5 + 4 - 2;
	echo 5 - 4 * 2;
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div> b + a" . "=c</div>"; //. means combining 2 different strings

	echo "<div> $b + $a" . "=($a+$b)</div>";
	echo "<div> $b + $a =".($a+$b)."</div>"; //= "string" + (math) + "string"

	?>


	<hr>
	<div>This is my name</div>
	<div>
		<?php

		$firstname = "Hsuan Ling";
		$lastname = "Tu";
		$fullname = $firstname . " " . $lastname; //Way 1
		$fullname = "$firstname $lastname"; //Way 2


		echo $fullname; 


		 ?>
	</div>


	<hr>
	<?php 

	// Superglobal (search for: www.php.net)
	//marks in URL meanings: ? means "get array"
	
	

	echo $_GET['name']; //example: ?name=Joey
	echo $_GET['id']; //example: ?id=Joey

	echo "<br>";

	echo "<a href='?name=Joey'>Link</a><br>";

	echo "<div>My name is {$_GET['name']}</div>"; //Add {} when the value is too complex for php, to let php know thing inside {} is one thing.

	echo "<a href='?name=Joey&type=textarea'>Link</a><br>";

	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>"; //example: type=h1 or textarea

	 ?>

	 <hr>
	 <?php 

	 // Array
	 $colors = array("red","green","blue");

	 echo $colors[0]; //index

	 echo "
	 	<br><$colors[0]
	 	<br><$colors[1]
	 	<br><$colors[2]
	 ";


	 echo count($colors); //amount of the colors array

	  ?>

	  <!-- ?= (quick echo block) means tell php we only want to echo out for one time purpose -->
	  <div style="color:<?= $colors[1]?>"> 
	  	This text is green.
	  </div>

	  <!-- Notes: ; only uses in between two statements, like echo + echo -->


	  <hr>
	  <?php 

	  //Associative Array
	  $colorsAssociative = [
	  	"red" => "#f00",
	  	"green" => "#0f0",
	  	"blue" => "#00f",
	  ]; //=> means the property is being assign the value

	  echo $colorsAssociative['green'];

	   ?>

	   <hr>
	   <?php 

	   // Casting
	   $c = "$a"; //5 is not a number here, it's a string 5.
	   $d = $c*1; //the way to convert string 5 to number 5
	   $colorsObject = (object)$colorsAssociative;

	   // echo $colorsObject

	   echo "<hr>";

	   // Array Index Notation
	   echo $colors[0]."<br>";
	   echo $colorsAssociative['red']."<br>";
	   echo $colorsAssociative[$colors[0]]."<br>";

	   // Object Property Notation
	   echo $colorsObject -> red."<br>"; //-> means select the value
	   echo $colorsObject -> {$colors[0]}."<br>";

	    ?>

	    <hr>

	    <?php 

	    print_r($colors);
	    echo "<hr>";
	    print_r($colorsAssociative);
  		echo "<hr>";
	    echo "<pre>",print_r($colorsObject),"</pre>"; //, can let echo multiple things.

	    // Function
	    function print_p($v) {
	    	echo "<pre>",print_r($v),"</pre>";
	    }

	    print_p($_GET);

	     ?>


</body>
</html>