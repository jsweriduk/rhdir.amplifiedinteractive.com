<?php

    session_start();

    $key=$_GET{"city"};

    require_once 'config.php';
    mysql_select_db("rhdir", $con);


    $clause = " WHERE ";//Initial clause
    $sql="SELECT * FROM facServices2 as fs INNER JOIN facilities as f on (f.id=fs.fac_id )  ";//Query stub
    foreach($_SESSION['keywords'] as $c){
        if(!empty($c)){
            $sql .= $clause." fs.".$c." = '1'";
            $clause = " and ";//Change  to OR after 1st WHERE
            
        }   
    }
    $sql .=  " and f.locCity = '$key' ";
    //echo $sql;//Remove after testing

    $result=mysql_query($sql);

    $productArray = array();
    while ($products=mysql_fetch_assoc($result)) {
    $state = $products['locState'];
    $productArray[] = $products;

    }

    //we send the array as JSON object
    //echo json_encode($productArray);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ucfirst($key) ?> - Drug & Alcohol Recovery Centers</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="style.css" type="text/css" />


</head><!--/head-->

<body class="homepage">

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