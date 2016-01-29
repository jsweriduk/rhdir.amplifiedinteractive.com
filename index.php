<?php

    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Amplified Interactive | Rehabs</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="/style.css" type="text/css" />

</head><!--/head-->

<body class="homepage">
  
            <!-- Header -->
            <?php include 'include/mashableNav.php';  ?>
            
            <section>
                <div class="container clearfix">
                    <div class="row">

                         <?php include 'include/tube-home-page.php';  ?>
                     </div>
                 </div>
            </section>
            

                 
<section>
	<div class="clearfix">
	
            <!-- Search Bar -->   
            <?php include 'include/searchbar.php';  ?>
    </div>
	
	<div class="container clearfix">
        <div class="row">
         

            <!--div class="container-fluid col-lg-9 wows fadeInDowns"-->
            <div class="container-fluid col-lg-9">          
                <?php include 'include/sponsored-centers.php';  ?>

                <?php include 'include/home-education.php'; ?>  

                <?php include 'include/home-opinions.php'; ?>          

                <?php include 'include/featuredVideo.php';  ?>
				<br>
				<!-- News Section -->
                <?php include 'include/news-section.php'; ?>  
                <br>
				<br>
				<br>

            </div>
            
            <?php include 'include/rightside.php';  ?>
            

        </div>
        <!-- /.row -->
    </div>

</section>

    <!-- Call Banner -->

    <?php include 'include/callBanner.php';  ?>
    <br/>

    <!-- Section Bottom -->
    <?php include 'include/bottom.php';  ?>

    <!-- Footer -->
    <?php include 'include/footer.php';  ?>    
        
    <!-- Script Footer -->
    <?php include 'include/footerScript.php';  ?>    

</body>

</html>