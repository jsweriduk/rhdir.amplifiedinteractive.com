<?php

session_start();

$key=$_GET{"zip"};
$state="";
require_once 'config.php';
mysql_select_db("rhdir", $con);

$result=mysql_query("SELECT distinct * FROM facilities WHERE locZip = '$key' order by facName asc ");

$productArray = array();
while ($products=mysql_fetch_assoc($result)) {
$productArray[] = $products;
}

//we send the array as JSON object
//echo json_encode($productArray);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zip Code <?php echo ucfirst($key) ?> - Drug & Alcohol Recovery Centers</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="style.css" type="text/css" />
    
</head><!--/head-->

<body class="homepage">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>


<section>
    <div class="container clearfix">
        <div class="row">

            <!-- Search Bar -->   
            <?php include 'include/searchbar.php';  ?>

            <hr>

            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                <?php include 'include/sponsored-centers.php';  ?>

                <?php include 'include/search-facility-list.php';  ?>

            </div>

                <?php include 'include/rightside.php';  ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <hr>

</section>

    <!-- Section Bottom -->
    <?php include 'include/bottom.php';  ?>

    <!-- Footer -->
    <?php include 'include/footer.php';  ?>    
        
    <!-- Script Footer -->
    <?php include 'include/footerScript.php';  ?>    

</body>
</html>