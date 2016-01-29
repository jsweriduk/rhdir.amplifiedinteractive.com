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

    <link rel="stylesheet" href="style.css" type="text/css" />

</head><!--/head-->

<body class="homepage">
  
            <!-- Header -->
            <?php include 'include/mashableNav.php';  ?>
                 
<section>
	<div class="clearfix">
	
            <!-- Search Bar --> 
            <?php include 'include/searchbar.php';  ?>
				
    </div>
	
	    <!-- Section Bottom -->
	<div class="container">
		<div class="col-lg-9 col-md-9">
			<?php include 'include/findTreatment.php';  ?>
		</div>
		<div class="col-lg-3">
			<?php include 'include/featuredTreatmentCentersSideBar.php'; ?>
		</div>
	</div>
	<br>
	<br>
	<?php include 'include/callBanner.php';  ?>
	
	
	<div class="container">
        <div class="row">

            <!--div class="fancy-title title-center title-dotted-border col-lg-9">
                <a name="tube-search"><h3>Treatment Tube Search</a></h3>
            </div-->
            
            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">
				<br>
                <?php include 'include/find-treatment-centers-detox.php'; ?>
				<br>
				<?php include 'include/find-treatment-centers-residential.php'; ?>
				<br>
				<?php include 'include/find-treatment-centers-outpatient.php'; ?>
				<br>
				<?php include 'include/find-treatment-centers-intervention.php'; ?>
				<br>
				<?php include 'include/find-treatment-centers-alternative.php'; ?>
				<br>
            </div>

                <?php include 'include/rightside.php'; ?>

            
        </div>
        <!-- /.row -->
    </div>
	
	
	
</section>	
    <!-- Footer -->
    <?php include 'include/footer.php';  ?>    
        
    <!-- Script Footer -->
    <?php include 'include/footerScript.php';  ?>    

</body>
    
</html>