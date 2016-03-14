<?php
ini_set("display_errors", 1);
error_reporting(-1);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cipproject";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
     $errors='2';
} 
$itemID = 2;
$userID = 1;
$sql = "SELECT DISTINCT r.itemID, r2.ratingValue - r.ratingValue 
            as rating_difference
            FROM rating r, rating r2
            WHERE r.userID=$userID AND 
                    r2.itemID=$itemID AND 
                    r2.userID=$userID;";
$db_result = $connection->query($sql);
$num_rows = mysqli_num_rows($db_result);
//For every one of the user's rating pairs, 
//update the dev table
if($num_rows == 0)
{
    echo $sql;
}
while ($row = mysqli_fetch_assoc($db_result)) {
    $other_itemID = $row["itemID"];
    $rating_difference = $row["rating_difference"];
    //if the pair ($itemID, $other_itemID) is already in the dev table
    //then we want to update 2 rows.
    if (mysqli_num_rows(mysqli_query("SELECT itemID1 
    FROM dev WHERE itemID1=$itemID AND itemID2=$other_itemID",
    $connection)) > 0)  {
        $sql = "UPDATE dev SET count=count+1, 
	sum=sum+$rating_difference WHERE itemID1=$itemID 
	AND itemID2=$other_itemID";
        //mysql_query($sql, $connection);
    $connection->query($sql);
	//We only want to update if the items are different                
        if ($itemID != $other_itemID) {
            $sql = "UPDATE dev SET count=count+1, 
	    sum=sum-$rating_difference 
	    WHERE (itemID1=$other_itemID AND itemID2=$itemID)";
            //mysql_query($sql, $connection);
        $connection->query($sql);
        }
    }
    else { //we want to insert 2 rows into the dev table
        $sql = "INSERT INTO dev VALUES ($itemID, $other_itemID,
        1, $rating_difference)";
        //mysql_query($sql, $connection); 
            $connection->query($sql);
	//We only want to insert if the items are different       
        if ($itemID != $other_itemID) {         
            $sql = "INSERT INTO dev VALUES ($other_itemID, 
	    $itemID, 1, -$rating_difference)";
            //mysql_query($sql, $connection);
            $connection->query($sql);
            echo "SUCESS";
        }
    }    
}
?>