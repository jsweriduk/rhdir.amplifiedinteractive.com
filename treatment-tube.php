<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Treatment Tube</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="/style.css" type="text/css" />

</head><!--/head-->

<body class="">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>
       
<section>
	<?php include 'include/tube-search.php'; ?>
    <div class="container">
        <div class="row">

            <!--div class="fancy-title title-center title-dotted-border col-lg-9">
                <a name="tube-search"><h3>Treatment Tube Search</a></h3>
            </div-->
            
            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                    
                <?php include 'include/tube-recommended.php';  ?>
                <?php include 'include/tube-recent.php';  ?>
                <?php include 'include/tube-addiction.php';  ?>
                <?php include 'include/tube-mental-health.php';  ?>  

            </div>

                <?php include 'include/rightside.php';  ?>

            
        </div>
        <!-- /.row -->
    </div>

</section>

    <!-- Call Banner -->
    <br/>        
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