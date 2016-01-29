<script>
$(document).on("click", "#edutab01", function() {
  url = "/treatment-education-drug-addiction.php";
  window.location = url;
});
$(document).on("click", "#edutab02", function() {
  url = "/treatment-education-alcohol-addiction.php";
  window.location = url;
});
$(document).on("click", "#edutab03", function() {
  url = "/treatment-education-mental-health.php";
  window.location = url;
});
$(document).on("click", "#edutab04", function() {
  url = "/treatment-education-resources.php";
  window.location = url;
});
$(document).on("click", "#navtab04", function() {
  url = "/treatment-education.php";
  window.location = url;
});
</script>                   
<!-- new menu -->
                      <li class="dropdown menu-large">
                          <a href="" id="navtab04" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-mortar-board"></i> Education  <i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">
 

 <div class="container">
    <div class="row col-lg-12">

                                 <div class="tab-wra"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <li class="active"><a href="#edutab1" id="edutab01" data-toggle="tab" class="analistic-01">Drug Addiction</a></li>
                                                    <li class=""><a href="#edutab2" id="edutab02" data-toggle="tab" class="analistic-02">Alcohol Addiction</a></li>
                                                    <li class=""><a href="#edutab3" id="edutab03" data-toggle="tab" class="tehnical">Mental Health Disorders</a></li>
                                                    <li class=""><a href="#edutab4" id="edutab04" data-toggle="tab" class="tehnical">Resources</a></li>
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">
                                                  <div class="tab-pane fade active in" id="edutab1">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Education' and subCat='Drug Addiction' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="edutab2">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Education' and subCat='Alcohol Addiction' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="edutab3">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Education' and subCat='Mental Health Disorders' and content != '' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->                                                  
                                                  <div class="tab-pane fade" id="edutab4">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Education' and subCat='Resources' and content != '' order by createDate desc ");
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
