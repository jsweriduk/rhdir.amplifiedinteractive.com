<?php

    $result=mysql_query("SELECT * FROM attContent WHERE mainCat='" . $maincat . "' and subCat='" . $subcat . "' order by createDate desc ");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
    }
?>
        <section id="">

                    <div class="">
                        <h1 class="treatment-heading find-treatment">Related Articles:</h1>
                    </div>

                    <div id="article-related" class="owl-carousel posts-carousel ">


                        <?php 
                            $i=0;   
                            foreach($contentArray as $row): {
                                $shortContent = substr($row['content'], 0, 70);
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
                               
                               $cdate = strtotime($row['modDate']);
                               $image1 = substr($row['imageFN1'],0,-4) . "-thumb.png";
                               $imageurl = "/images/content/";
                               
                               if ($i++ == 9) {break;}

                            }    
                        ?>            
                               <div class="oc-item">
                                    <div class="ipost clearfix related-panel">
                                        <div class="entry-image">
                                            <?php echo "<a href='article-content-detail.php?id=". $row['con_id'] . "'><img class='find-treatment-image' src='". $imageurl . $image1 . "'></a>  </div>"; ?>
                                        <div class="related-panel-content">
										<div class="entry-title">
                          
                                        <?php echo   "<h3><a href='article-content-detail.php?id=". $row['con_id'] . "'> " . $shortTitle . "</a></h3>"; ?>
                                
                                           
                                            
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
                                            <?php echo   "<a href='article-content-detail.php?id=". $row['con_id'] . "'> <i>Published </i> " . date('m.d.y',$cdate) . "</a>"; ?>
                                        </div>
										</div>
                                    </div>
                                </div>
                        <?php
                          if ($i > 11) {break;}
                          $i++;
                          endforeach 
                        ?>


                    </div>
        </section>  

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocImages = $("#article-related");

                            ocImages.owlCarousel({
                                margin: 1,
                                nav: true,
                                navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                                autoplay: false,
                                autoplayHoverPause: true,
                                dots: false,
                                navRewind: false,
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 }
                                   // 1200:{ items:5 }
                                }
                            });

                        });

                    </script>

                    <div class="clear"></div>

                    