<!-- new menu -->
<script>
$(document).on("click", "#treattab01", function() {
  url = "/find-treatment-detox.php";
  window.location = url;
});
$(document).on("click", "#treattab02", function() {
  url = "/find-treatment-residential.php";
  window.location = url;
});
$(document).on("click", "#treattab03", function() {
  url = "/find-treatment-outpatient.php";
  window.location = url;
});
$(document).on("click", "#navtab06", function() {
  url = "/treatment-education.php";
  window.location = url;
});
</script>

                      <li class="dropdown menu-large">
                          <a href="/find-treatment-centers.php" id="navtab06" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-md"></i> Find Treatment <i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">

                           <div class="container">
                              <div class="row col-lg-12">
                           
                                 <div class="tab-wra"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <li class="active"><a href="#detoxificationtab" id="treattab01" data-toggle="tab" class="tehnical">Detox</a></li>
                                                    <li class=""><a href="#residentialtab" data-toggle="tab" id="treattab02" class="tehnical">Residential</a></li>
                                                    <li class=""><a href="#outpatienttab" data-toggle="tab" id="treattab03" class="analistic-02">Outpatient</a></li>
                                                    
                                                    <li class=""><a href="#" >Intervention</a></li>
                                                    <li class=""><a href="#" >Alternative Recovery Resources</a></li>
                                                 
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">


                                                  <div class="tab-pane fade active in" id="detoxificationtab">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM facilities WHERE 
                                                                    lower(svcText1) like '%detoxification%' or
                                                                    lower(svcText2) like '%detoxification%' or
                                                                    lower(svcText3) like '%detoxification%' or
                                                                    lower(svcText4) like '%detoxification%' or
                                                                    lower(svcText5) like '%detoxification%' or
                                                                    lower(svcText6) like '%detoxification%' or
                                                                    lower(svcText7) like '%detoxification%' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-find-facilities.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="residentialtab">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM facilities WHERE 
                                                                    lower(svcText1) like '%residential%' or
                                                                    lower(svcText2) like '%residential%' or
                                                                    lower(svcText3) like '%residential%' or
                                                                    lower(svcText4) like '%residential%' or
                                                                    lower(svcText5) like '%residential%' or
                                                                    lower(svcText6) like '%residential%' or
                                                                    lower(svcText7) like '%residential%' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-find-facilities.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->
                                                  <div class="tab-pane fade" id="outpatienttab">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM facilities WHERE 
                                                                    lower(svcText1) like '%outpatient%' or
                                                                    lower(svcText2) like '%outpatient%' or
                                                                    lower(svcText3) like '%outpatient%' or
                                                                    lower(svcText4) like '%outpatient%' or
                                                                    lower(svcText5) like '%outpatient%' or
                                                                    lower(svcText6) like '%outpatient%' or
                                                                    lower(svcText7) like '%outpatient%' order by createDate desc ");
                                                              ?>
                                                              <?php include 'include/mashnav-find-facilities.php';  ?>
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

