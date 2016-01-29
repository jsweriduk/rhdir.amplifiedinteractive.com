
<section id="bottoms">
    <!--div class="well container container-fluid wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"-->
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-9">

                        <ul class="nav nav-tabs nav-tabs-listing">
                          <li class="active"><a data-toggle="tab" href="#general"><i class="fa fa-camera"></i> General Info</a></li>
                          <li><a data-toggle="tab" href="#reviews"><i class="fa fa-heart"></i> Reviews</a></li>
                          <li><a data-toggle="tab" href="#map"><i class="fa fa-map-marker"></i> Map</a></li>
                        </ul>

                        <div class="tab-content tab-content-listing">
                          <div id="general" class="tab-pane fade in active">
                            <div class="col-lg-5">
                                <br/>
                                <div class="listing-title ">
                                    <strong><?php echo $row['facName'] ?></strong>
                                </div>    
                                <div class="listing-addr ">
                                    <!--i class="fa map-marker"></i--> 
                                    <?php 
                                        echo $row['locStr1'];
                                     
                                        if (!empty($row['locStr2'])) {
                                            echo ", " . $row['locStr2'] . "<br/>";
                                        }else{
                                            echo "<br/>";
                                        }
                                        $id = $row['id'];
                                        echo $row['locCity'] . ', ' .  $row['locState'] . ' ' .$row['locZip']; ?>
                                    
                                </div><br/>
 
                                <div class=" listing-web">
                                    
                                    <?php 
                                        $website = $row['website'];
                                        if (strstr($website, 'http://')) {
                                        }
                                        elseif (!empty($website)) {
                                            $website = "http://" . $website;
                                        } 
                                        if ($website != '') {
                                            echo "<i class='fa fa-tv'></i> <a href='" .  $website . "' target=_blank> " . $website . "</a>" ;
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <i class="fa fa-phone-square"></i> <a  class="listing-phone"> <?php echo $row['phone'] ?></a>
                                </div><br/><br/>
                                
                               <?php
                                    $result1=mysql_query("SELECT count(*) as 'count', AVG(revRating) as 'average' FROM attReviews WHERE fac_id = '$key'");
                                    $contentArray1 = array();
                                    while ($contents1=mysql_fetch_assoc($result1)) {                                        
                                        $count = ($contents1['count']);
                                        $avg = $contents1['average'];
                                        $avg = round($avg, 1);
                                    }   
                                    echo "  
                                            <span><b>Customer Reviews (". $count . ")</b>
                                                <input id='input-2ee' name='rating' type='number' class='rating' min='0' max='5' step='0.5' value='". $avg . "' data-stars=5 data-size='xs'
                                                data-symbol='&#xe005;' data-default-caption='{rating} hearts' data-star-captions='{}' data-disabled='true'>                                                
                                            </span>
                                            Average " . $avg . " out of 5 Hearts ";
                                ?>

       
                            </div>
                            <div class="col-lg-7">
                                <br/>
                                <div class="hidden-xs hidden-sm">
                                    <img src="images/samples/facCarousel.png">
                                </div>


                            </div>
                      </div>
                      <div id="reviews" class="tab-pane fade">                        
                        <?php include 'include/facReviews.php';  ?> 
                      </div>
                      <div id="map" class="tab-pane fade">
                        <?php 
                            $strAddr = $row['locStr1']. ' ' . $row['locCity']. ',' .$row['locState']. ' ' . $row['locZip'];

                            echo "<iframe width='950' height='450' frameborder='0' style='border:0'
                                    src='https://www.google.com/maps/embed/v1/place?q=" . $strAddr . "&key=AIzaSyDL8tz7baZIWlGuHkRgYYB7VymiJl0BsBo' allowfullscreen>
                                  </iframe>";
                        ?> 
                      </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-listing2">
                      <li class="active"><a data-toggle="tab" href="#overview"><i class="fa fa-rss"></i> Overview</a></li>
                      <li><a data-toggle="tab" href="#services"><i class="fa fa-check-square-o"></i> Services Provided</a></li>
                    </ul>

                    <div class="tab-content tab-content-listing2">
                        <div id="overview" class="tab-pane active in fade">
                            <br/>
                            <div class="Listing-overview">
                                <h4>Overview of <?php echo $row['facName'] ?></h4>
                            </div> 
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-success">Link</button>
                              <button type="button" class="btn btn-success">Link</button>
                              <button type="button" class="btn btn-success">Link</button>
                              <button type="button" class="btn btn-success">Link</button>
                              <button type="button" class="btn btn-success">Link</button>
                              <button type="button" class="btn btn-success">Link</button>  
                            </div><br/><br/>
                            <div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div>   
                        </div>
                        <div id="services" class="tab-pane fade">
                            <br/>
                            <div class="Listing-overview">
                                <h4>Services Provided by: <?php echo $row['facName'] ?></h4>
                            </div> 
                                <div class="col-lg-6">
                                    <div class="">  
                                        <?php $mainId='1'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                     <div class="">  
                                        <?php $mainId='2'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div>                                   
                                    <div class="">  
                                        <?php $mainId='3'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                     <div class="">  
                                        <?php $mainId='5'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 

                                </div>
                                <div class="col-lg-6">
                                     <div class="">  
                                        <?php $mainId='8'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                     <div class="">  
                                        <?php $mainId='7'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                     <div class="">  
                                        <?php $mainId='9'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                     <div class="">  
                                        <?php $mainId='10'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                    <div class="">  
                                        <?php $mainId='4'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                    <div class="">  
                                        <?php $mainId='6'; ?>
                                        <?php include 'include/get-services.php';  ?>
                                    </div> 
                                </div>

                            </div> 
                        </div>
                    </div>
    
            </div>   
        </div>

<!--div class="col-sm-12">
    <span>test</span>
    <img src="images/samples/listing-featured.png">
</div-->  
    </section><!--/#bottom-->



