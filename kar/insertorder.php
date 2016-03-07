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

//Select all rows from menucard
$sqlme = "SELECT * FROM menucard";
$result1 = $conn->query($sqlme);

//
$sqlmen = "SELECT * FROM customers where name = '$uname'";
$result3 = $conn->query($sqlmen);
while($row = $result3->fetch_assoc()){
	$userid = $row['id'];
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

		while($row = $result1->fetch_assoc())
		{
			if($f == $row['food'])
			{
				$chkpt = $row['id'];
				$time = $row['time'];
				$machine = $row['machine'];
			}
		}
		if($machine == 1)
			$tablemach = 'idmaster';
		else if($machine == 2)
			$tablemach = 'chmaster';
		else if($machine == 3)
			$tablemach = 'ffmaster';

		$sql2 = "INSERT INTO $tablemach (userid, food, time) VALUES ('$userid', '$f', '$time')";
		$result2 = $conn->query($sql2);
	}
}

//Token
$resulttoke=mysql_query("SELECT count(*) as total from tokengiver");
$countserve=mysql_fetch_assoc($resulttoke);
$lasttoken = $countserve['total'];
$lasttoken = $lasttoken++;

$sql4 = "INSERT INTO tokengiver (username, token) VALUES ('$uname','$lasttoken')";
$result4 = $conn->query($sql4);
// Redirect after inserting into Database...
echo '<script type="text/javascript">
	                 window.location = "addorder.php"
	            </script>';
?>