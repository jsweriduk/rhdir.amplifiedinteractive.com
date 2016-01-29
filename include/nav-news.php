<!-- new menu -->
<script>
$(document).on("click", "#newstab01", function() {
  url = "/news/entertainment/";
  window.location = url;
});
$(document).on("click", "#newstab02", function() {
  url = "/news/health-care/";
  window.location = url;
});
$(document).on("click", "#newstab03", function() {
  url = "/news/recent/";
  window.location = url;
});
$(document).on("click", "#newstab04", function() {
  url = "/news/political/";
  window.location = url;
});
$(document).on("click", "#newstab05", function() {
  url = "/news/local/";
  window.location = url;
});

</script>  
                      <li class="dropdown menu-large">
                          <a href="#" id="navtab02" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i> News <i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">
                           <div class="container">
                              <div class="row col-lg-12">
                           
                                 <div class="tab-wrap"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <li class="active"><a href="#newstab1" id="newstab01" data-toggle="tab" class="analistic-01">Entertainment</a></li>
                                                    <li class=""><a href="#newstab2" id="newstab02" data-toggle="tab" class="analistic-02">Health Care</a></li>
                                                    <li class=""><a href="#newstab3" id="newstab03" data-toggle="tab" class="tehnical">Recently Added</a></li>
                                                    <li class=""><a href="#newstab4" id="newstab04" data-toggle="tab" class="tehnical">Political</a></li>
                                                    <li class=""><a href="#newstab5" id="newstab05" data-toggle="tab" class="tehnical">Local</a></li>
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">

                                                  <div class="tab-pane fade active in" id="newstab1">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and subCat='Entertainment' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="newstab2">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and subCat='Health Care' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="newstab3">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="newstab4">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and subCat='Political' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="newstab5">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and subCat='Local' and content != '' order by createDate desc ");
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

