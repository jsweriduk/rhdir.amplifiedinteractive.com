<?php

    $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Blog' and content != '' order by createDate desc limit 4");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
    }

?>

						<div class="row">

                    <div class="col-lg-12  strike">
                        <h1>Opinions</h1>
                    </div>
					<div class="col-lg-12 no-padding-left no-padding-right">
                        <?php
							$articlecount=1;
                            foreach($contentArray as $row) {
                                $shortContent = substr($row['content'], 0, 60);
                                if (!empty($shortContent)) {
                                    $shortContent .= '...';
                                }
                                if (strlen($row['title']) > 28 ) {
                                   $shortTitle = substr($row['title'], 0, 20);
                                   $shortTitle .= '...';
                                }else {
                                    $shortTitle = $row['title'];
                                }
                              /*  $image1 = $row['imageFN1'];
                                if (empty($image1)) {
                                    $image1="thumb-test-1.png";
                                }*/
                               $image1 = $row['imageFN1'];
                               $imageurl = "images/content/";
							   $metadesc = substr($row['metaDesc'],0,90) . "...";
							   $createdate = $row['createDate'];
							   $id = $row['con_id'];

                        ?>
                    <!--div class="col-lg-12 fancy-title title-center title-dotted-border">    
                        <h3><span>Addictions</span></h3>              
                    </div-->  

                    <div class=<?php echo "'col-xs-12 col-sm-6 col-md-6 col-lg-3 article-" . $articlecount ."'"; ?> >   
                        <div class="panel panel-info">
                            <div class="media">
                               <div class="pull-left no-padding-right no-margin-right">
                                    <img class="img-responsive full-width" width="200px" src=<?php echo $imageurl . $image1; ?>>
                                </div>
                                <div class="media-body home-media">
									 <h2 class="home-media-title">
										<?php echo   "<a href='article-content-detail.php?id=". $row['con_id'] . "'> " . $shortTitle . "</a>"; ?>
									 </h2>
                                     <p><?php echo $metadesc; ?></p><font color="#9a9999"><i>Published <?php echo substr($createdate,0,10); ?></i></font>
                                </div>       
                            </div>
                        </div>
                    </div> 
							<?php 
								$articlecount += 1;
								} ?>
                </div>
				</div>  