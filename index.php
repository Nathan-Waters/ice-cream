<?php
/*
 * Nathan Waters
 * 4/11/23
 * 328/ice-cream/index.php
 * Order form for Ice Cream Shoppe
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

$flavors = array("vanilla", "chocolate", "strawberry", "caramel");
$cones = array("sugar"=> "Sugar Cone", "waffle" => "Waffle Cone", "cup");


$title = "Order Form";
include('header.php');
?>

<div class="container">
    <h1>Welcome to my Ice Cream Shoppe!</h1>
    <form action="process.php" method="post">

        <h3>Choose a flavor</h3>

        <?php
        foreach ($flavors as $flavor){
            echo "<label><input type='checkbox' name='flavor[]' value='$flavor'> ".ucfirst($flavor)."</label>
        <br>";
        }
        ?>
        <h3>Choose One</h3>
        <?php
        foreach ($cones as $value=>$label) {
            echo "<label><input type='radio' name='cone' value='$value'> " . ucfirst($label) . "</label>
        <br>";
        }
        ?>
<!--        <label><input type='radio' name='cone' value='sugar'> Sugar Cone</label>-->
<!--        <br>-->
<!--        <label><input type='radio' name='cone' value='waffle'> Waffle Cone</label>-->
<!--        <br>-->
<!--        <label><input type='radio' name='cone' value='cup'> Cup</label><br>-->
        <h3>How many scoops?</h3>
        <input type="text" name="scoops" ><br>

        <br>
        <button type="submit">Place Order</button>
    </form>
</div>
</body>
</html>