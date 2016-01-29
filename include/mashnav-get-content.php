                                                              <?php      
                                                                  $navcontentArray = array();
                                                                  while ($navcontents=mysql_fetch_assoc($result)) {
                                                                      $navcontentArray[] = $navcontents;
                                                                  }
                                                                  $i=0;
                                                                  foreach($navcontentArray as $navcontent): {
                                                                      $pos = strpos($navcontent['content'], "<p>");
                                                                      
                                                                      $shortContent = substr($navcontent['content'], $pos, 75);
                                                                      if (!empty($shortContent)) {
                                                                          $shortContent .= '...';
                                                                      }
                                                                      if (strlen($navcontent['title']) > 24 ) {
                                                                         $shortTitle = substr($navcontent['title'], 0, 24);
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
                                                                      $video1 = $navcontent['videoFN'];
																	  $image1 = $navcontent['imageFN1']; /*
                                                                      $image1  = str_replace("'","",$navcontent['title']);
                                                                      $image1  = str_replace("?","",$image1);   
                                                                      $image1  = str_replace(" ","-",$image1);                                                                    
                                                                      $image1  = strtolower($image1);
                                                                      $imageThumb1 = $image1 . "-thumb.png"; 
                                                                      $image1 .= ".png"; */
																	  $imageThumb1 = substr($image1, 0, -4) . "-thumb.png";
                                                                      if ($navcontent['mainCat'] == "Treatment Tube" or $navcontent['content'] == '') {
                                                                          //$urlDetail = "treatment-tube-detail.php";
                                                                          $urlDetail = "/video/";
                                                                      } elseif ($navcontent['mainCat'] == "Blog") { 
                                                                               $urlDetail = "/blog/";
                                                                      } else {
                                                                               //$urlDetail = "article-content-detail.php";
                                                                               $urlDetail = "/article/";
                                                                      }
                                                                      if ($navcontent['mainCat'] == "Treatment Tube" or $navcontent['content'] == '') {
                                                                          $imageurl = "/videos/";
                                                                      }else{
                                                                          $imageurl = "/images/content/";
                                                                      }
																	
                                                                      if ($i++ == 3) {break;}
                                                                      
                                                                      $shortContent=strip_tags($shortContent);
                                                                      
                                                                  }   
                                                              ?>
                                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">   
                                                                    <div class="panel panel-info">
                                                                        <div class="media find-treatment-panel">
                                                                            <div class="pull-top">                        
                                                                              <!--?php echo "<a href='". $urlDetail . "?id=". $navcontent['con_id']  . "'><img class='img-responsive find-treatment-image' width='200px' src='". $imageurl . $imageThumb1 . "'></a>"; ?-->
                                                                              <?php echo "<a href='". $urlDetail . $navcontent['contentURL']  . "'><img class='img-responsive find-treatment-image' width='200px' src='". $imageurl . $imageThumb1 . "'></a>"; ?>
                                                                            </div>
                                                                            <div class="media-body">
                                                                              <!--?php echo   "<a href='". $urlDetail . "?id=". $navcontent['con_id'] . "'> " . $shortTitle . "</a><br/>"; ?-->
                                                                              <?php echo   "<a href='". $urlDetail . $navcontent['contentURL'] . "'> " . $shortTitle . "</a><br/>"; ?>
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
