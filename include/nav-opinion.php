
<!-- new menu -->
                      <li class="dropdown menu-large">
                          <a href="/treatment-tube.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-microphone"></i> Opinion <i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">
                           <div class="container">
                              <div class="row col-lg-12">
                                 <div class="tab-wra"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <li class="active"><a href="#opiniontab1" data-toggle="tab" class="analistic-01">MD</a></li>
                                                    <li class=""><a href="#opiniontab2" data-toggle="tab" class="analistic-02">PhD</a></li>
                                                    <li class=""><a href="#opiniontab3" data-toggle="tab" class="tehnical">LMFT</a></li>
                                                    <li class=""><a href="#opiniontab4" data-toggle="tab" class="tehnical">CAADAC</a></li>
                                                    <li class=""><a href="#opiniontab5" data-toggle="tab" class="tehnical">JD</a></li>
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">
                                                    
                                                  <div class="tab-pane fade active in" id="opiniontab1">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Opinion' and subCat='MD' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="opiniontab2">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Opinion' and subCat='PhD' and (content != '' or contentType='Video') order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="opiniontab3">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Opinion' and subCat='LMFT' and (content != '' or contentType='Video') order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="opiniontab4">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Opinion' and subCat='CAADAC' and (content != '' or contentType='Video') order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="opiniontab5">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Opinion' and subCat='JD' and (content != '' or contentType='Video') order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                </div> <!--/.tab-content-->  
                                            </div> <!--/.media-body--> 
                                        </div> <!--/.media-->     
                                    </div><!--/.tab-wrap-->  
                                </div>
                             </div>
                          </ul>
                      </li>
<!-- End Menu -->