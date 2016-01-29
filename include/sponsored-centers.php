                <!--div class="elm-mainheader align-center col-lg-12">
                    <h4 class="elm-maintitle">Sponsored Treatment Centers</h4>
                </div-->

                <!-- Feature Centers -->
				<div class="col-lg-12 no-padding-left">
                     <h1 class="treatment-heading">Featured Treatment Centers</h1> 
                </div>
<?php
	$result=mysql_query("SELECT * FROM facilities limit 2");
    $navfaccontentArray = array();
    while ($navfaccontents=mysql_fetch_assoc($result)) {
        $navfaccontentArray[] = $navfaccontents;
    }
    $i=0;
    foreach($navfaccontentArray as $navfaccontent) {
		$padding = "no-padding-left";
		if ($i > 0) {
			$padding = "no-padding-right";
		}
        $shortName = substr($navfaccontent['facName'], 0, 55);
		
        if (!empty($shortName)) {
			$shortName .= '...';
        }
        if (strlen($navfaccontent['facName']) > 24 ) {
            $shortTitle = substr($navfaccontent['facName'], 0, 24);
            $shortTitle .= '...';
        } else {
            $shortTitle = $navfaccontent['facName'];
        }	
		
        $strAddr = $navfaccontent['locStr1']. ' ' . $navfaccontent['locCity']. ',' .$navfaccontent['locState']. ' ' . $navfaccontent['locZip'];
		$strAddr1 = $navfaccontent['locStr1']. '<br>' . $navfaccontent['locCity']. ',' .$navfaccontent['locState']. ' ' . $navfaccontent['locZip'];
        $imageurl ="https://maps.googleapis.com/maps/api/streetview?size=200x200&location=". $strAddr ."&key=AIzaSyD91JMyrgZUaGi7wm6b43wrk72xBQsmjPs";
		$phone = $navfaccontent['phone'];  
?>


				<?php echo "<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 " . $padding . "'>"; ?>      
                    <div class="panel panel-success">
						<div class="panel panel-info">
                            <div class="media">
								<div class="pull-left">                        
                                    <?php echo "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'><img class='img-responsive' width='200px' src='". $imageurl . "'></a>"; ?>
                                </div>
								<div class="media-body">
									<div class="sponsor-title">
										<h2><?php echo   "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'> " . $shortName . "</a><br/>"; ?></h2>
									</div></br>
									<div class="sponsor-addr">
										<i class="fa fa-map-marker"></i><span><?php echo $strAddr1; ?></span>                                    
									</div>
									<div class="sponsor-tele">
										<p><?php echo $phone; ?></p>
									</div>
									<div class="sponsor-rating">
										<?php
											$result1=mysql_query("SELECT count(*) as 'count', AVG(revRating) as 'average' FROM attReviews WHERE fac_id = '5888'");
											$contentArray1 = array();
											while ($contents1=mysql_fetch_assoc($result1)) {                                        
												$count = ($contents1['count']);
												$avg = $contents1['average'];
												$avg = round($avg, 1);
											}   
											echo "  
                                                <input id='input-2ee' name='rating' type='number' class='rating' min='0' max='5' step='0.5' value='". $avg . "' data-stars=5 data-size='xs'
                                                data-symbol='&#xe005;' data-default-caption='{rating} hearts' data-star-captions='{}' data-disabled='true'>                                                
                                            </span>
                                            <span class='sponsor-review-count'> " . $count . " reviews";
                                ?>
                                    </div>
								</div>								
                            </div>
                        </div>
                    </div>
                </div>  

	<?php $i+=1; } ?>
