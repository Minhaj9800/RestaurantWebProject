<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<a align = "left" href = "index.html">HOME</a>
<?php
session_start();
if(!array_key_exists("orders", $_SESSION)) {
  $_SESSION["orders"] = array();
  $_SESSION["norders"] = 0;
}
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $address = $phone = "";

$appetizerprice = "";
$_SESSION["Vegetabel Samossa"] = 3.99; 
$_SESSION["Chicken pakora"] = 5.99; 
$_SESSION["Corn Soup"] = 4.99; 
$_SESSION["Thai Soup"] = 4.99; 
$_SESSION["Lentlis Pakora"] = 3.99; 

$riceprice = "";
$_SESSION["Plain Rice"] = 2.99;  
$_SESSION["Brown Rice"] = 3.99; 
$_SESSION["Sticky Rice"] = 6.99; 
$_SESSION["Steam Rice"] = 3.99; 
$_SESSION["Indian Pulaw Rice"] = 4.99; 

$curryprice = "";
$_SESSION["Thai Chicken Curry"] = 12.99; 
$_SESSION["Butter Chicken"] = 13.99; 
$_SESSION["Lamb Curry"] = 14.99;
$_SESSION["Vegetable Kurma"] = 10.99; 
$_SESSION["Fried Chickpeas Curry"] = 10.99; 

$dessertprice = "";
$_SESSION["Homestyle Yougurt"] = 3.99;  
$_SESSION["Indian Rasmalai"] = 4.99; 
$_SESSION["Sweet Rice Pudding"] = 3.99; 
$_SESSION["Sweet Rice"] = 5.99; 
$_SESSION["Vanila Pudding"] = 3.99; 

$specialprice = "";
$_SESSION["Thai Fried Rice"] = 11.99; 
$_SESSION["Hyderabad Biriyani"] = 14.99; 
$_SESSION["Chinese Pasta"] = 10.99; 
$_SESSION["Chicken Sharma"] = 12.99; 
$_SESSION["Pakistani Meat Malai"] = 14.99;

$drinkprice = "";
$_SESSION["Blue velvet Juice"] = 5.99; 
$_SESSION["Sweet Mango Lassi"] = 3.99; 
$_SESSION["Regular Beer"] = 4.99; 
$_SESSION["Tapioka"] = 5.99;
$_SESSION["Special Bubble Tea"] = 4.99; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!array_key_exists("name",$_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["Phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = test_input($_POST["Phone"]);
    
    if (!preg_match( "/^[0-9]{10}$/",$phone)) {
      $phoneErr = "Invalid Phone Number";
    }
  }

  if (empty($_POST["Address"])) {
    $address = "N/A";
  } else {
    $address = test_input($_POST["Address"]);
  }
}
//$_SESSION["phoneErr"] = $phoneErr;
$_SESSION["nameErr"] = $nameErr;
$_SESSION["emailErr"] = $emailErr;
$_SESSION["test"] = "test";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Order Your Food(s) and Provide your address</h2>
<p><span class="error">* required field</span></p>
<form method="post" action= Confirmation.php >
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phone: <input type="text" name="Phone" value="<?php echo $phone;?>">
  <span class="error">*<?php echo $phoneErr;?></span>
  <br><br>
  Address: <textarea name="Address" rows="5" cols="40"><?php echo $address;?></textarea>
  <br><br>
  <p><strong>Make your meal by ordering food from Following Options:</strong></p>
  <table><tbody>
  <tr><td>Appetizers</td><td>Rice</td><td>Curry</td><td>Special</td><td>Dessert</td><td>Drinks</tr>
         <tr>
         <td>
         <select name = "Appetizer">
            <option>Vegetabel Samossa</option>
            <option>Chicken pakora</option>
            <option>Corn Soup</option>
            <option>Thai Soup</option>
            <option>Lentlis Pakora</option>
         </select>
         </td>

         <td>
         <select name = "Rice">
            <option>Plain Rice</option>
            <option>Brown Rice</option>
            <option>Sticky Rice</option>
            <option>Steam Rice</option>
            <option>Indian Pulaw Rice</option>
         </select>
         </td>
         <td>
         <select name = "Curry">
            <option>Thai Chicken Curry</option>
            <option>Butter Chicken</option>
            <option>Lamb Curry</option>
            <option>Vegetable Kurma</option>
            <option>Fried Chickpeas Curry</option>
         </select></td>
         <td>
         <select name = "Special">
            <option>Thai Fried Rice</option>
            <option>Hyderabad Biriyani</option>
            <option>Chinese Pasta</option>
            <option>Chicken Sharma</option>
            <option>Pakistani Meat Malai</option>
         </select></td>
         <td>
         <select name = "Dessert">
            <option>Homestyle Yougurt</option>
            <option>Indian Rasmalai</option>
            <option>Sweet Rice Pudding</option>
            <option>Sweet Rice</option>
            <option>Vanila Pudding</option>
         </select></td>
         <td>
         <select name = "Drinks">
            <option>Blue velvet Juice</option>
            <option>Sweet Mango Lassi</option>
            <option>Regular Beer</option>
            <option>Tapioka</option>
            <option>Special Bubble Tea</option>
         </select></td></tr></tbody></table>
         <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
