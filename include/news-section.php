<div class="row">
                    <div class="col-lg-12  strike">
                        <h1>News</h1>
                    </div>
                </div>    
                    <!--div class="elm-mainheader align-center">
                        <h2 class="elm-maintitle">Trending Addiction News</h2>
                    </div-->
           
                                           
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parent">
                                <ul class="nav nav-tabs nav-stacked news-list">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="news-tab">Health Care</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="news-tab">Entertainment</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="news-tab">Local</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="news-tab">Political</a></li>
                                </ul>
                            </div>

                            <div class="parent media-body">
                                <div class="tab-content news-panel">
                                    <?php include 'include/news-section-health-care.php'; ?>

                                    <?php include 'include/news-section-entertainment.php'; ?>
									
									<?php include 'include/news-section-local.php'; ?>
									
									<?php include 'include/news-section-political.php'; ?>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->