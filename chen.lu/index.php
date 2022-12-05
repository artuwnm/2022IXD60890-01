<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Home</title>
    <?php include "parts/meta.php"; ?>
</head>
    <?php include "parts/navbar.php"; ?>

<body>
 <div class="view-window" style="background-image: url(img/main.png);"></div>

    <div class="container">
        <article id="article1" class="article card soft">
            <div class="display-flex flex-align-center">
                <div class="flex-stretch">
                    <h2>Welcome to Pet Cloth</h2>
                </div>
            </div>
            <div class="article-body">
            <p>Pet Clothing is an online platform for pet parents to buy cute and pretty pet cloth. This website sells diverse pet clothing - including some unusual pets like birds, rabbits, and hamsters. <p>

            <p>This website will be designed to be simple and friendly. It will have a very detailed classification to help pet parent find their favorite clothes for their babies. </p>
            
            <p>Best gifts to our fluffy friends!</p>
            </div>
        </article>
    </div>


    <div class="container">
        <div class="card soft">
            <h2>Best Sellers</h2>

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

            echo "<div class='productlist grid gap'>",array_reduce($result,'bestsellerTemplate'),"</div>";

            ?>

            
        </div>

</body>
</html>