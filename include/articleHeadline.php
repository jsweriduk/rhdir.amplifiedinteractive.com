<?php
            $today = date("F j, Y, g:i a");
?>

                <!-- Featured Tube Video -->

                <div class="panel custom-tube">   
                    
                    <div>
                        <!--img class="img-responsive" src="images/samples/tube-video.png"-->
                        <?php echo "<img class='img-responsive article-image' src='/images/content/" . $image2 . "'>" ?>
                    </div><!--br/-->

                    <!--div class="entry-title">
                        <h4><?php echo $title; ?></h4>
                    </div-->
                    <div class="media-body">
						<div class="media-body-inner">
							<div class="media-body-overlay">
								<h2 class="contentTitle"><?php echo $title; ?></h2></p>                 
								<h5 class="contentAuthor"><?php echo $author . ", " . $today; ?> </h5>
							</div>
							<span><?php echo $content ?> </span>
							<!-- Social Share -->
							<div class="social-share">
								<h5 class="social-share-text pull-left">Share This Article</h5>
								<img class="social-share-arrow pull-left" src="/images/arrow.png"></img>
							</div>
							<div class="social-links">
								<ul id="social-icons-list" class="social-list no-margin-left">
									<li id="facebook-icon-share" class="social-icon">
										<a href="#">
										<img class="hvr" data-alt-src="/images/social-icons/facebook-icon-invert-share.png" src="/images/social-icons/facebook-icon-share.png" style="vertical-align:middle;"></a>
									</li>
									<li id="twitter-icon-share" class="social-icon">
										<a href="#">
										<img class="hvr" data-alt-src="/images/social-icons/twitter-icon-invert-share.png" src="/images/social-icons/twitter-icon-share.png" style="vertical-align:middle;"></a>
								</ul>
							</div>
						</div>
					</div> 
                </div>