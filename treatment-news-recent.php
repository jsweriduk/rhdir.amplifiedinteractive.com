<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>News | Recent</title>

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

                    
                <?php
    $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and content != '' order by createDate desc");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
    }

    //we send the array as JSON object
    //echo json_encode($contentArray);
?>

        <section id="" >
            <!--div class="content-wrap">
                <div class="container clearfix"-->

                    <div class="strike">
                        <h1 name="tube-recommended">News | Recent</h1>
                    </div>

                    <div id="tube-recommended" class="">

                        <?php
							$itemcount=0;
							$paginationcount = 1;
                            foreach($contentArray as $row) {
                                $shortContent = substr(strip_tags($row['content']), 0, 70);
                                if (!empty($shortContent)) {
                                    $shortContent .= '...';
                                }
                                if (strlen($row['title']) > 28 ) {
                                   $shortTitle = substr($row['title'], 0, 25);
                                   $shortTitle .= '...';
                                }else {
                                    $shortTitle = $row['title'];
                                }
                              /*  $image1 = $row['imageFN1'];
                                if (empty($image1)) {
                                    $image1="thumb-test-1.png";
                                }*/
                               $image1 =  substr($row['imageFN1'],0,-4) . "-thumb.png";
                               $imageurl = "/images/content/";
								if(($itemcount % 12) == 0) {
									if($itemcount == 0) {
											echo "<div class='pagination-div active' id='pagination-" . $paginationcount++ . "'>";
									}
									else {
										echo "<div class='pagination-div' id='pagination-" . $paginationcount++ . "'>";
									}
								}
								$itemcount++;
                        ?>            
                               <div class="video col-lg-4 col-md-6 col-sm-12">
                                    <div class="ipost clearfix card-content">
                                        <div class="entry-image">
                                            <?php echo "<a href='/article/". $row['contentURL'] . "'><img class='img-responsive' src='". $imageurl . $image1 . "'></a>  </div>"; ?>
                                        <div class="entry-title">
                          
                                        <?php echo   "<h3><a href='/article/". $row['contentURL'] . "'> " . $shortTitle . "</a></h3>"; ?>
                                                                
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <!--li><i class="icon-calendar3"></i>
                                                <?php 
                                                    $php_timestamp = time(); // $row['createDate'];
                                                    $php_timestamp_date = date("F d, Y", $php_timestamp);
                                                    //echo $php_timestamp_date; 
                                                    echo $row['createDate']; 
                                                ?> 
                                            </li-->
                                            <!--li><a href="#comments"><i class="icon-comments"></i> 34</a></li>
                                            <li><a href="#"><i class="icon-film"></i></a></li-->
                                        </ul>
                                        <div class="entry-content">
                                            <?php echo   "<a href='/article/". $row['contentURL'] . "'> " . $shortContent . "</a>"; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php        
								if(($itemcount % 12) == 0) {
									echo "</div>";
								}
							}
							if(($itemcount % 12) != 0) {
								echo "</div>";
							}
                        ?>  

                    </div>
					<?php if($itemcount > 12) { ?>
					<div class="col-lg-12">
						<ul class="pagination">
							<?php 
							$i=1;
							echo "<li><a id='pagination-button' data-id='" . $i . "'class='active'>". $i . "</a></li>";
							for($i = 2; $i < $paginationcount; $i++) {
									echo "<li><a id='pagination-button' data-id='" . $i . "'>". $i . "</a></li>";
							}
							?>
						</ul>
					</div>
					<?php } ?>
                <!--/div>
            </div-->
        </section>    


                    <script type="text/javascript">

                        jQuery(document).ready(function($) {
                            var ocPosts = $("#oc-recommended");

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
					<script type="text/javascript">
						$(document).ready(function() {
							$("#pagination-button").addEventListener("click", paginationFunction);
						});
						$('.pagination').on('click', '#pagination-button', paginationFunction);
						function paginationFunction() {
							var buttonNumber = $(this).data("id");
							var divID = "#pagination-" + buttonNumber;
							$(".pagination-div").removeClass("active");
							$("#pagination-button").removeClass("active");
							$(divID).addClass("active");
							$(this).addClass("active");
						}
					</script>
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