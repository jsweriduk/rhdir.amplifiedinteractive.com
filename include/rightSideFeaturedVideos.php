                <!-- Add Center -->
                <div class="panel panel-custom-reverse">
                    <div class="panel-heading"><i class="fa fa-video-camera"> <b> Featured Videos</b></i></div>
                    <div class="panel">
                        <div class="media">
                            <div class="pull-top image-container featured-video-sidebar-container">
                               <?php
                                    $result=mysql_query("SELECT * FROM attContent WHERE featuredSideBarTopVid= '1' limit 1 ");
                                    $row = mysql_fetch_assoc($result);

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

                                    $cdate = strtotime($row['modDate']);  
									$imageurl = "/videos/";
                                    $image1  = $row['imageFN1'];
									$imageThumb1 = substr($image1,0,-4) . "-thumb.png";
                              
                                    echo "<div>
                                            <a href='/video/". $row['contentURL'] . "'>
                                            <img class='img-responsive' src='" .$imageurl . $imageThumb1 . "'>                                         
                                          </div>
                                          <div class='overlay-content hidden-xs'>
                                            <span><b>". $shortTitle ."</b></span><br>
                                            <span><font size='2px'><i class='fa fa-play'></i> (watch)</font></span><br>
                                            <span><font size='2px'><i>Uploaded ". date('m.d.y',$cdate) ."<i></font></span>
                                          </div>"; 


                               ?>
                            </div>
                        </div>
                    </div>
                   <?php
                        $result=mysql_query("SELECT * FROM attContent WHERE featuredSideBarVid= '1' limit 4 ");
                        $contentArray = array();
                        while ($contents=mysql_fetch_assoc($result)) {
                            $contentArray[] = $contents;
                        }   
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
                            $cdate = strtotime($row['modDate']);
                            $image1  = str_replace(" ","-",$row['title']);
                            $image1  = str_replace("?","",$image1);
                            $image1  = strtolower($image1);
                            $imageThumb1 = $image1 . "-thumb.png"; 
                            $image1 .= ".png";
                            $imageurl = "/videos/";
                    ?>
                        
                        <div class=''>
                            <div class=''>
                               <div class='pull-left feature-side-videos-body image-container'>
                                    <?php echo "<a href='/video/". $row['contentURL'] . "'><img width='85px' class='img-responsive' src='" .$imageurl . $imageThumb1 . "'>
                                    <img width='15px' class='play-button hidden-xs hidden-sm' src='/images/play-button.png'></a>"; ?>
                                </div>
                                <div class='media-body feature-side-videos'>
                                     <?php echo "<a class='feature-video-title' href='/video/". $row['contentURL'] . "'>" . $shortTitle . "</a><br/>"; ?>
                                     <?php echo "<span class='feature-video-upload'> Uploaded " . date('m.d.y',$cdate) . "</span>"; ?>
                                </div>       
                            </div>
                        </div><hr>
                    <?php        
                        }
                    ?>                                
                    <p class="feature-video-more">more videos</p>
                </div>                    