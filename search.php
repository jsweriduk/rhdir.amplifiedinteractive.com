
<?php

    session_start();

    $st=$_GET{"state"};

    include 'include/state-list.php';

    $fullname = array_search( strtolower($st), array_map('strtolower', $statesbw) );
    $key = $st;
    require_once 'config.php';
    mysql_select_db("rhdir", $con);


    $result=mysql_query("SELECT distinct locCity FROM facilities WHERE locState = '$key' order by locCity asc");

    $productArray = array();
    while ($products=mysql_fetch_assoc($result)) {
        $productArray[] = $products['locCity'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ucfirst($fullname) ?> - Drug & Alcohol Recovery Centers</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>



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

                <?php include 'include/sponsored-centers.php';  ?>

                <?php include 'include/search-city-list.php';  ?>

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