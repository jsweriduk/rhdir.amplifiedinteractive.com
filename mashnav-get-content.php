                                                              <?php      
                                                                  $navcontentArray = array();
                                                                  while ($navcontents=mysql_fetch_assoc($result)) {
                                                                      $navcontentArray[] = $navcontents;
                                                                  }
                                                                  $i=0;
                                                                  foreach($navcontentArray as $navcontent): {
                                                                      $shortContent = substr($navcontent['content'], 0, 55);
                                                                      if (!empty($shortContent)) {
                                                                          $shortContent .= '...';
                                                                      }
                                                                      if (strlen($navcontent['title']) > 28 ) {
                                                                         $shortTitle = substr($navcontent['title'], 0, 25);
                                                                         $shortTitle .= '...';
                                                                      }else {
                                                                          $shortTitle = $navcontent['title'];
                                                                      }
                                                                      /*$image1 = $navcontent['imageFN1'];
                                                                      $imageThumb1 = $image1;
                                                                      if (empty($image1)) {
                                                                          $image1  = str_replace(" ","-",$navcontent['title']);
                                                                          $image1  = strtolower($image1);
                                                                          $imageThumb1 = $image1 + "-thumb.png"; 
                                                                          $image1 .= ".png";
                                                                      }*/
                                                                      $image1  = str_replace("'","",$navcontent['title']);
                                                                      $image1  = str_replace(" ","-",$image1);                                                                      
                                                                      $image1  = strtolower($image1);
                                                                      $imageThumb1 = $image1 . "-thumb.png"; 
                                                                      $image1 .= ".png";
                                                                      if ($navcontent['mainCat'] == "Treatment Tube") {
                                                                          $urlDetail = "treatment-tube-detail.php";
                                                                      }else{
                                                                          $urlDetail = "article-content-detail.php";
                                                                      }

                                                                      if ($i++ == 3) {break;}
                                                                  }   
                                                              ?>
                                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">   
                                                                    <div class="panel panel-info">
                                                                        <div class="media">
                                                                            <div class="pull-top">                        
                                                                              <?php echo "<a href='". $urlDetail . "?id=". $navcontent['con_id'] . "'><img class='img-responsive' width='200px' src='images/content/". $imageThumb1 . "'></a>"; ?>
                                                                            </div>
                                                                            <div class="media-body">
                                                                              <?php echo   "<a href='". $urlDetail . "?id=". $navcontent['con_id'] . "'> " . $shortTitle . "</a><br/>"; ?>
                                                                              <?php echo   "<span>" . $shortContent . "</span>"; ?>
                                                                            </div>       
                                                                        </div>
                                                                    </div>
                                                                </div> 

                                                              <?php
                                                                if ($i > 5) {break;}
                                                                $i++;
                                                                endforeach 
                                                              ?>
