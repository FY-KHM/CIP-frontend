<?php
session_start();

if(!isset($_SESSION["uname"])) {
	      echo '<script type="text/javascript">
	                 window.location = "login.php"
	            </script>';
      }

//Food items and quantity got as a single GET request from addorder.php

$food=$_GET['food'];
$quantity=$_GET['quantity'];
$uname=$_SESSION["uname"];

//Splitting food items and quantity based on delimiter "space" got from $quantity and $food...

$foodpieces = explode(" ", $food);

$quantitypieces = explode(" ", $quantity);



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cipproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     $errors='2';
} 

//Insert the food items which is not equal to zero
for($i=0;$i<4;$i++)
{
	if($quantitypieces[$i]!=0)
	{
		$f=$foodpieces[$i];
		$q=$quantitypieces[$i];
		$sql = "INSERT INTO orders (username, food, quantity) VALUES ('$uname', '$f', '$q')";
		$result = $conn->query($sql);
	}
}

// Redirect after inserting into Database...
echo '<script type="text/javascript">
	                 window.location = "addorder.php"
	            </script>';

?>