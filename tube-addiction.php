<?php

    $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and subCat='Drug Addiction' and content != '' order by createDate desc ");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
    }

?>

        <section id="">
                    <div class="strike">
                        <span name="tube-recommended">Drug Addiction</span>
                    </div>

                    <div id="oc-addiction" class="owl-carousel portfolio-carousel">

                        <?php    
                            foreach($contentArray as $row) {
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
                               $image1  = str_replace(" ","-",$row['title']);
                               $image1  = strtolower($image1);
                               $imageThumb1 = $image1 . "-thumb.png"; 
                               $image1 .= ".png";
                              
                        ?>            
                               <div class="oc-item">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <?php echo "<a href='treatment-tube-detail.php?id=". $row['con_id'] . "'><img src='images/content/". $imageThumb1 . "'></a>  </div>"; ?>
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
                                            <?php echo   "<a href='treatment-tube-detail.php?id=". $row['con_id'] . "'> " . $shortContent . "</a>"; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php        
                            }
                        ?>  

                    </div>
        </section>            

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocPortfolio = $("#oc-addiction");

                            ocPortfolio.owlCarousel({
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

                    <div class="clear"></div>
