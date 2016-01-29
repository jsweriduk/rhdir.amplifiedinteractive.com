<?php

require_once '../config.php';
mysql_select_db("rhdir", $con);

$key=$_GET{"term"};

$result=mysql_query("SELECT distinct locZip FROM facilities WHERE locZip like '$key%'");

$productArray = array();
while ($products=mysql_fetch_assoc($result)) {
$productArray[] = $products['locZip'];
}

//we send the array as JSON object
echo json_encode($productArray);

?>