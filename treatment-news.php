<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="style.css" type="text/css" />

</head><!--/head-->

<body class="">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>
       
<section>
	<?php include 'include/news-search.php'; ?>
    <div class="container">
        <div class="row">

            <!--div class="fancy-title title-center title-dotted-border col-lg-9">
                <a name="tube-search"><h3>Treatment Tube Search</a></h3>
            </div-->
            
            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                    
                <?php include 'include/news-entertainment.php'; ?>
                <?php include 'include/news-health-care.php'; ?>
                <?php include 'include/news-recently-added.php'; ?>
                <?php include 'include/news-political.php'; ?>  
				<!--<?php include 'include/news-local.php'; ?>  -->
            </div>

                <?php include 'include/rightside.php'; ?>

            
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
 <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocPosts = $("#ai-mental-health");

                            ocPosts.owlCarousel({
                                margin: 1,
                                nav: true,
                                navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: false,
                                autoplayHoverPause: true,
                                dots: false,
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 }
                                   // 1200:{ items:4 }
                                }
                            });

                        });

                    </script>
</body>
</html>