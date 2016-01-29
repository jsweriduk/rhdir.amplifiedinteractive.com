
<?php
    session_start();

    $key=$_GET{"fac"};

    require_once 'config.php';
    mysql_select_db("rhdir", $con);

    $result=mysql_query("SELECT distinct * FROM facilities WHERE id = '$key'");

    $productArray = array();
    while ($products=mysql_fetch_assoc($result)) {
        $productArray[] = $products;
    }

    foreach($productArray as $row) {
    }
    
    //we send the array as JSON object
    //echo json_encode($productArray);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $row['facName'] ?></title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>
    

    <link rel="stylesheet" href="css/reviewForm.css" type="text/css" />
    <script type="text/javascript" src="js/star-rating.js" ></script>
    <link rel="stylesheet" href="css/star-rating.css" type="text/css" />

    <link rel="stylesheet" href="style.css" type="text/css" />

</head><!--/head-->

<body class="">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>

    <!-- Search Bar -->   
    <?php include 'include/searchbar.php';  ?>

<section>
    <div class="container clearfix">
        <div class="row">


            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                <!--?php include 'include/sponsored-centers.php';  ?>                
                <hr-->

                <?php include 'include/search-facility-details.php';  ?>

            </div>

                <?php include 'include/rightsideListing.php';  ?>

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