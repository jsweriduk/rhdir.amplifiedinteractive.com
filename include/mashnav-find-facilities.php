                                                              <?php      
                                                                  $navfaccontentArray = array();
                                                                  while ($navfaccontents=mysql_fetch_assoc($result)) {
                                                                      $navfaccontentArray[] = $navfaccontents;
                                                                  }
                                                                  $i=0;
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

                                                                      $urlDetail = "/facdetails.php";
                                                                      $imageurl ="https://maps.googleapis.com/maps/api/streetview?size=200x200&location=". $strAddr ."&key=AIzaSyD91JMyrgZUaGi7wm6b43wrk72xBQsmjPs";
                                                                  
                                                                      if ($i++ == 3) {break;}
                                                                  }   
                                                              ?>
                                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">   
                                                                    <div class="panel panel-info">
                                                                        <div class="media find-treatment-panel">
                                                                            <div class="pull-top">                        
                                                                              <?php echo "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'><img class='img-responsive treatment-center-image' width='200px' src='". $imageurl . "'></a>"; ?>
                                                                            </div>
                                                                            <div class="media-body">
                                                                              <?php echo   "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'> " . $shortName . "</a><br/>"; ?>
                                                                              <!--?php echo   "<span>" . $shortTitle . "</span>"; ?-->
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div> 

                                                              <?php
                                                                if ($i > 5) {break;}
                                                                $i++;
                                                                endforeach 
                                                              ?>
