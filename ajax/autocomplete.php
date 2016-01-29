<?php


/*
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'rhdir';
$dbuser = 'root';
$dbpass = 'Treatment$1';
$dbhost = 'localhost';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
*/


require_once '../config.php';

//$con = mysql_connect("localhost", "root", "Treatment$1");
//if( mysql_connect_error()) echo "Failed to connect to MySQL: " . mysql_connect_error();


/*
$con = mysql_connect("localhost", "root", "Treatment$1");

if (!$con) {
die('Could not connect: ' . mysql_error());
}
*/

mysql_select_db("rhdir", $con);

$state=$_GET{"term"};

//$state='C';

//$result=mysql_query("SELECT distinct locState FROM facilities WHERE locState like '$state%'");
//$result=mysql_query("SELECT  facName FROM facilities WHERE facName like '%$state%' or locState like '$state%' or locCity like '$state%' or locZip like '$state%'");
$result=mysql_query("SELECT  facName FROM facilities WHERE facName like '%$state%'");


$productArray = array();
while ($products=mysql_fetch_assoc($result)) {
//$productArray[] = $products['locState'];
$productArray[] = $products['facName'];


//$productArray[] = array_map('utf8_encode', $products);
}

//we send the array as JSON object
echo json_encode($productArray);

/*

#----------------------------------------------------
# from: http://docs.jquery.com/UI/Autocomplete
# the local data can be a simple array of strings,
# or it contains objects for each item in the array,
# with either a 'label' or 'value' property, or both.
#----------------------------------------------------
$ak = array('label' => 'Alaska');
$al = array('label' => 'Alabama');
$ar = array('label' => 'Arkansas');

$arr[0] = $ak;
$arr[1] = $al;
$arr[2] = $ar;

# echo the json data back to the html web page
echo json_encode($arr);
*/

?>