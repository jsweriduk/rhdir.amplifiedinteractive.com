<?php
$servername = "localhost";
$username = "rhdir_admin";
$password = "Treatment1";
$dbname = "rhdir";

// Get Search form input
$search_input = $_POST['name'];

// Open Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Test Connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Form the query
$sql="SELECT `facName`, `id` FROM `facilities` WHERE `facName` LIKE '%" . $search_input . "%'";

// run against mysql query function 
$result=mysqli_query($conn, $sql);

//loop through results
echo "results from ". $search_input . ": <br>";
while($row=mysqli_fetch_array($result)) {
	$facility_name = $row['facName'];
	$id = $row['id'];
	echo "ID: " . $id . ". Facility: " . $facility_name . "<br>";
}


	echo '
   <html> 
	  <head> 
	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
	    <title>Search Our Records</title> 
	  </head> 
	  <p><body> 
	    <h3>Enter Facility ID</h3>  
	    <form  method="post" action="cred.php"  id="searchform"> 
	      <input  type="text" name="facility_id"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
	  </body> 
	</html> 
	</p> ';
	if(isset($_POST['submit'])) 
	{
   // Enter the Code you want to execute after the form has been submitted
	$facility_id = $_POST['facility_id'];
	$sql="SELECT `facName` FROM `facilities` WHERE `id`=" . $facility_id;
	$result=msqli_query($conn, $sql);
	$facility_name = $row['facName'];
	echo $facility_name;
  // Dispaly Success or failure Message if any 
	}
	else               
	{
    // Display the Form and the Submit Button
	}
	
?>