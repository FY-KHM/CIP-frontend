<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$password = $_POST["password"];

$response["error"]="true";
$response["error_msg"]= "seems working right!";
return json_encode($response);
?>