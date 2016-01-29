
<?php

    session_start();
    $_SESSION['keywords']="";

    if(isset($_GET['submit'])){
        if(isset($_GET['keyword'])){
            foreach($_GET['keyword'] as $c){
                if(!empty($c)){
                    $_SESSION['keywords'][$c]  = $c;

                }   
            }
        }
    }

    include 'include/state-list.php';

    require_once 'config.php';
    mysql_select_db("rhdir", $con);

    $sql="SELECT distinct locState FROM facilities WHERE 1=1 order by locState asc";
    $result=mysql_query($sql);

    $productArray = array();
    while ($products=mysql_fetch_assoc($result)) {
    $productArray[] = $products['locState'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drug & Alcohol Recovery Centers</title>

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

                <?php include 'include/search-state-list.php';  ?>

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