<?php
/*
 * Nathan Waters
 * 4/11/23
 * 328/ice-cream/process.php
 * Processing page for Ice Cream Shoppe
 */

ini_set("display_errors", 1);

error_reporting(E_ALL);
include('header.php');

define("PRICE_PER_SCOOP", 2.00);
define("SALES_TAX", 0.08);

$title = "Order Form";
?>

<body>
    <div class="container">
        <h1>Thank you for your order!</h1>

        <?php

//        var_dump($_POST);
        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavors = $_POST['flavor'];
        $flavorList = implode(", ", $flavors);

        //calc price
        $subtotal = $numScoops * PRICE_PER_SCOOP;
        $totalPrice = $subtotal + ($subtotal * SALES_TAX);

        echo "<br>";
//        echo "$numScoops";
//        echo "$flavorList";
        if(sizeof($flavors) > $numScoops){
            echo "<h2>Oops! you have more flavors than scoops.</h2>";
            return;
        }

        echo "subtotal: $subtotal <br> total: $totalPrice";
        ?>
    </div>
</body>