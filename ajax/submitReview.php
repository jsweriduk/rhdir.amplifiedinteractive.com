
<?php

    require_once '../config.php';
    mysql_select_db("rhdir", $con);

	$id=mysql_real_escape_string($_POST['facID']);
	$name=mysql_real_escape_string($_POST['name']); 
	$email=mysql_real_escape_string($_POST['email']);
	$rating=mysql_real_escape_string($_POST['rating']);
	$title=mysql_real_escape_string($_POST['title']);
	$comment=mysql_real_escape_string($_POST['comment']);
	$status="Pending";
	$cDate=date("Y-m-d H:i:s");
	//echo $id, $status, $name, $email, $rating, $title, $comment, $cDate;
	$url="../facdetails.php?fac=" . $id; 
	$query = mysql_query("insert into attReviews(fac_id, revStatus, revName, revEmail, revRating, revTitle, revComment, createDate) values ('$id','$status', '$name','$email', '$rating', '$title', '$comment','$cDate')"); //Insert query
	
	if($query){
		//echo "Data Submitted succesfully";
	}
	header("Location: $url ");

	//mysql_close($connection); // Connection Closed.
?>