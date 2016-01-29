<?php 
    $videoFN = $title . ".mp4"; 
    $today = date("F j, Y, g:i a");
?>
                <!-- Featured Tube Video -->

                <div class="panel custom-tube">                    
                    <!--div>
                        <img class="img-responsive" src="images/samples/tube-video.png">
                    </div-->

                    <div align="center" class="embed-responsive embed-responsive-16by9">
                        <video autoplay loop class="embed-responsive-item">
                            <!--source src="videos/Personality Disorders.mp4"-->
                            <?php echo "<source src='videos/". $videoFN . "'>" ?>
                        </video>
                    </div>
                    
                    <br/>

                    <!--div class="entry-title">
                        <h4><?php echo $title; ?></h4>
                    </div-->
                    <div class="media-body">
                        <h2 class="contentTitle"><?php echo $title; ?></h2>              
                        <h5 class="contentAuthor"><?php echo $author . ", " . $today; ?> </h5>
                        <span><?php echo $content ?> </span>
                    </div> 
                </div>