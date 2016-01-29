        <section id="contents">

                    <div id="oc-featured-home" class="owl-carousel posts-carousel">
						<?php
                        $result=mysql_query("SELECT * FROM attContent WHERE featuredHomeVid= '1' limit 7 ");
                        $contentArray = array();
                        while ($contents=mysql_fetch_assoc($result)) {
                            $contentArray[] = $contents;
                        }   
                        foreach($contentArray as $row) {
                            if (strlen($row['title']) > 28 ) {
                               $shortTitle = substr($row['title'], 0, 25);
                               $shortTitle .= '...';
                            }else {
                                $shortTitle = $row['title'];
                            }
                            $cdate = strtotime($row['modDate']);
                            $image1 =  substr($row['imageFN1'],0,-4) . "-thumb.png"; 
                            $imageurl = "videos/";
						?>
                        
                        <div class='oc-item'>
                            <div class='ipost clearfix featured-home-panel'>
                               <div class="entry-image">
                                            <?php echo "<a href='treatment-tube-detail.php?id=". $row['con_id'] . "'><img class='featured-home-image' src='". $imageurl . $image1 . "'></a>  </div>"; ?>
								<div class="featured-home-content">
								<div class="entry-title">
                                        <?php echo   "<h3><a href='treatment-tube-detail.php?id=". $row['con_id'] . "'> " . $shortTitle . "</a></h3>"; ?>
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
                                            <?php echo   "<a href='treatment-tube-detail.php?id=". $row['con_id'] . "'> <i>Uploaded </i> " . substr($row['createDate'],0,10) . "</a>"; ?>
                                        </div>
								</div>
								<div class="featured-home-play-button">
									<?php echo "<a href='treatment-tube-detail.php?id=" . $row['con_id'] . "'>"; ?> <img class="featured-home-play-button-image" src="images/tube-play-button.png" /> (watch) </a>
								</div>
						</div>
						</div>
						<?php        
                        }
						?> 
					
        </section>  

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocImages = $("#oc-featured-home");

                            ocImages.owlCarousel({
                                margin: 5,
                                nav: true,
                                navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                                autoplay: false,
                                autoplayHoverPause: true,
                                dots: false,
                                navRewind: false,
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 },
                                    1200:{ items:4 }
                                }
                            });

                        });

                    </script>

                    <!--div class="clear"></div-->

                    