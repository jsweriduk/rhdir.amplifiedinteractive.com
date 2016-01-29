                <!-- Featured Video -->
<?php
    $result1=mysql_query("SELECT * FROM attContent WHERE contentURL LIKE '%video%' and featuredLgVid='1'");

    $contentArray1 = array();
    while ($contents=mysql_fetch_assoc($result1)) {
        $contentArray1[] = $contents;
    }

    //we  send the array as JSON object
    //echo json_encode($contentArray);
   
    foreach($contentArray1 as $row) {
        $shortContent = substr($row['content'], 0, 70);
        if (!empty($shortContent)) {
			$shortContent .= '...';
        }
        if (strlen($row['title']) > 50 ) {
            $shortTitle = substr($row['title'], 0, 50);
            $shortTitle .= '...';
        }else {
            $shortTitle = $row['title'];
        }
                              /*  $image1 = $row['imageFN1'];
                                if (empty($image1)) {
                                    $image1="thumb-test-1.png";
                                }*/
        $image1 =  $row['imageFN2'];
        $imageurl = "videos/";
		$createdate = substr($row['createDate'],0,10);
	}
                        ?>  


                <div class="row">
                    <div class="col-lg-12  strike">
                        <h1>Watch</h1>
                    </div>
					<div class="col-lg-12 no-padding-left no-padding-right">
					<div class="home-featured-video">
						 <?php echo "<a href='treatment-tube-detail.php?id=". $row['con_id'] . "'><img class='img-responsive featured-video-image' src='". $imageurl . $image1 . "'></a>"; ?>
					</div>
					
					<div class="home-featured-video-text">
						<?php echo   "<h3><a href='treatment-tube-detail.php?id=". $row['con_id'] . "'> " . substr($row['title'],0,40) . "</a></h3>"; ?>
					</div>
					<div class="home-featured-video-play">
						<img src="/images/tube-play-button.png">
						<span>watch</span>
					</div>
					<div class="home-featured-video-info">
						<span><i>Uploaded </i> <?php echo substr($createdate,0,10); ?></span>
					</div>
					<div class="home-featured-video-overlay">
						<span class="home-featured-video-overlay-span"><i>Featured Video</i></span>
					</div>
                </div>
				</div>
								