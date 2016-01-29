<?php
    $today = date("F j, Y, g:i a");
?>
                <!-- Featured Tube Video -->

                <div class="panel custom-tube video-bg">                    
                    <div align="center" class="embed-responsive embed-responsive-16by9 video-panel">
                        <?php echo "<iframe class='embed-responsive-item' src='/videos/". $videoFN . "' frameborder='0' allowfullscreen></iframe>"; ?>
                        <!--video autoplay loop class="embed-responsive-item"-->                            
                            <!--?php echo "<source src='videos/". $videoFN . "'>" ?-->                            
                        <!--/video-->

                    </div>

                    <!--div class="entry-title">
                        <h4><?php echo $title; ?></h4>
                    </div-->
                    <div class="media-body video-content">
                        <h2 class="contentTitle"><?php echo $title; ?></h2>              
                        <!--h5 class="contentAuthor"><?php echo $author . ", " . $today; ?> </h5-->
						<div class="video-content-copy">
							<p><?php echo $metaDesc ?> </p>
						</div>
						<div class="video-social-share social-links">
							<h5 class="social-share-text pull-left">Share This Article</h5>
							<img class="social-share-arrow pull-left" src="/images/arrow.png"></img>
						</div>
						<div class="video-social-links social-links">
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