<?php

require_once '../config.php';
mysql_select_db("rhdir", $con);

$key=$_GET{"term"};

//$result=mysql_query("SELECT  facName FROM facilities WHERE facName like '%$key%' or locState like '$key%' or locCity like '$key%' or locZip like '$key%'");
$result=mysql_query("SELECT  facName FROM facilities WHERE facName like '%$key%'");


$productArray = array();
while ($products=mysql_fetch_assoc($result)) {
	$productArray[] = $products['facName'];
	//$productArray[] = $products;

}


//we send the array as JSON object
echo json_encode($productArray);

?>