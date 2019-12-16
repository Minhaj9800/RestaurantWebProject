
<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["Phone"];
$address = $_POST["Address"];

$order = array();
$order["name"] = $name;
$order["email"] = $email;
$order["phone"] = $phone;
$order["address"] = $address;
$order["rice"] = $_POST["Rice"];
$order["curry"] = $_POST["Curry"];
$order["appetizer"] = $_POST["Appetizer"];
$order["dessert"] = $_POST["Dessert"];
$order["special"] = $_POST["Special"];
$order["drinks"] = $_POST["Drinks"];
$riceprice = $_SESSION[$_POST["Rice"]];
$curryprice = $_SESSION[$_POST["Curry"]];
$appetizerprice = $_SESSION[$_POST["Appetizer"]];
$dessertprice = $_SESSION[$_POST["Dessert"]];
$specialprice = $_SESSION[$_POST["Special"]];
$drinkprice = $_SESSION[$_POST["Drinks"]];

$total = $riceprice + $curryprice+$appetizerprice+$dessertprice+$specialprice+$drinkprice;
$order["total"] = $total;
$_SESSION["orders"][$_SESSION["norders"]] = $order;
$_SESSION["norders"] += 1;
echo "<h2>Order Will be Delivered to:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $address;
echo "<br>";
//if(!empty($_SESSION["phoneErr"])) // there was an error.
echo "<h2>Your Order Summary</h2>";
echo"<strong>Selected Rice Price: "." ". $riceprice ."</strong>";
echo "<br>"; 
str_repeat('&nbsp;', 2);
echo "<strong>Selected Curry Price: "."  ".$curryprice. "</strong>";
echo "<br>"; 
echo "<strong>Selected Appetizer Price: "."   ".$appetizerprice."</strong>";
echo "<br>"; 
echo "<strong>Selected Dessert Price:"."   ".$dessertprice."</strong>";
echo "<br>"; 
echo "<strong>Selected Special Menu Price:" ."  ".$specialprice."</strong>";
echo "<br>"; 
echo "<strong>Selected drink Price: ".$drinkprice."   "."</strong>";
echo "<br>"; 
echo "<h2>Your total Bill is: $total</h2>";
echo"<h2>Our All menu Prices are tax included and No charge for Food Delivery.</h2>";
?>
<a href="list.php">Click Here to see the all order of Current Order session.</a>