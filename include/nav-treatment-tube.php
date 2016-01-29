<script>
$(document).on("click", "#tubetab01", function() {
  url = "/videos/recommended/";
  window.location = url;
});
$(document).on("click", "#tubetab02", function() {
  url = "/videos/recent/";
  window.location = url;
});
$(document).on("click", "#tubetab03", function() {
  url = "/videos/drug-addiction/";
  window.location = url;
});
$(document).on("click", "#tubetab04", function() {
  url = "/videos/mental-health/";
  window.location = url;
});
$(document).on("click", "#navtab01", function() {
  url = "/videos/home/";
  window.location = url;
});
</script>  



                      <li class="dropdown menu-large">
                          <a href="/video/" class="dropdown-toggle" id="navtab01" data-toggle="dropdown"><i class="fa fa-video-camera"></i> Treatment Tube<i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">
                          <div class="container">
                             <div class="row col-lg-12">
                                 <div class="tab-wra"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <!--li class=""><a href="treatment-tube.php" class="analistic-01">Search Tube</a></li-->
                                                    <li class="active"><a href="#tubetab1" id="tubetab01" data-toggle="tab" class="analistic-02">Recommended</a></li>
                                                    <li class=""><a href="#tubetab2" id="tubetab02" data-toggle="tab" class="tehnical">Recently Added</a></li>
                                                    <li class=""><a href="#tubetab3" id="tubetab03" data-toggle="tab" class="tehnical">Drug Addiction Treatment</a></li>
                                                    <li class=""><a href="#tubetab4" id="tubetab04" data-toggle="tab" class="tehnical">Mental Health Treatment</a></li>
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">
                                                  
                                                  <div class="tab-pane fade active in" id="tubetab1">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and subCat='Recommended' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->


                                                  <div class="tab-pane fade" id="tubetab2">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and subCat='Recommended'  and featuredNavVid='1' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="tubetab3">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and featuredNavVid='1' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                     

                                                  <div class="tab-pane fade" id="tubetab4">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and subCat='Drug Addiction Treatment' and featuredNavVid='1' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="tubetab5">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Treatment Tube' and subCat='Mental Health Treatment' and featuredNavVid='1' order by createDate desc ");
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

