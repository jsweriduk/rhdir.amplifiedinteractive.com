<?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM facilities WHERE 
                                                                    lower(svcText1) like '%outpatient%' or
                                                                    lower(svcText2) like '%outpatient%' or
                                                                    lower(svcText3) like '%outpatient%' or
                                                                    lower(svcText4) like '%outpatient%' or
                                                                    lower(svcText5) like '%outpatient%' or
                                                                    lower(svcText6) like '%outpatient%' or
                                                                    lower(svcText7) like '%outpatient%' order by createDate desc  limit 12");

?>
<section id="">
                    <div class="">
                        <h1 class="treatment-heading find-treatment">Outpatient Treatment Centers</h1>
                    </div>

                    <div id="find-outpatient" class="owl-carousel posts-carousel">

                                                              <?php      
                                                                  $navfaccontentArray = array();
                                                                  while ($navfaccontents=mysql_fetch_assoc($result)) {
                                                                      $navfaccontentArray[] = $navfaccontents;
                                                                  }
                                                                  foreach($navfaccontentArray as $navfaccontent): {
                                                                      $shortName = substr($navfaccontent['facName'], 0, 55);
                                                                      if (!empty($shortName)) {
                                                                          $shortName .= '...';
                                                                      }
                                                                      if (strlen($navfaccontent['facName']) > 24 ) {
                                                                         $shortTitle = substr($navfaccontent['facName'], 0, 24);
                                                                         $shortTitle .= '...';
                                                                      }else {
                                                                          $shortTitle = $navfaccontent['facName'];
                                                                      }
                                                                      /*$image1 = $navfaccontent['imageFN1'];
                                                                      $imageThumb1 = $image1;
                                                                      if (empty($image1)) {
                                                                          $image1  = str_replace(" ","-",$navfaccontent['title']);
                                                                          $image1  = strtolower($image1);
                                                                          $imageThumb1 = $image1 + "-thumb.png"; 
                                                                          $image1 .= ".png";
                                                                      }*/
                                                                      $strAddr = $navfaccontent['locStr1']. ' ' . $navfaccontent['locCity']. ',' .$navfaccontent['locState']. ' ' . $navfaccontent['locZip'];
                                                                      
                                                                      /*$image1="";
                                                                      $image1  = $navfaccontent['image1']);
                                                                      $imageThumb1 = $image1 . "-thumb.png"; 
                                                                     
                                                                      $imageurl = "images/content/";

                                                                      $imageurl = "images/samples/";
                                                                      $imageThumb1 = "the-lakes-thumb.png";

                                                                      $imageurl = "http://placehold.it/";
                                                                      $imageThumb1 = "300x250";*/

                                                                      $urlDetail = "facdetails.php";
                                                                      $imageurl ="https://maps.googleapis.com/maps/api/streetview?size=200x200&location=". $strAddr ."&key=AIzaSyD91JMyrgZUaGi7wm6b43wrk72xBQsmjPs";
                                                                  
                                                                      if ($i++ == 3) {break;}
                                                                  }   
                                                              ?>
                                                                <div class="oc-item find-treatment-panel">   
                                                                    <div class="ipost clearfix">
                                                                        <div class="media">
                                                                            <div class="entry-image">                        
                                                                              <?php echo "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'><img class='img-responsive treatment-center-image' width='200px' src='". $imageurl . "'></a>"; ?>
                                                                            </div>
                                                                            <div class="entry-content">
                                                                              <?php echo   "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'> " . $shortName . "</a><br/>"; ?>
                                                                              <!--?php echo   "<span>" . $shortTitle . "</span>"; ?-->
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                              <?php
                                                                endforeach
                                                              ?>
															  
                    </div>
        </section>        
															  <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocImages = $("#find-outpatient");

                            ocImages.owlCarousel({
                                margin: 1,
                                nav: true,
                                navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
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
