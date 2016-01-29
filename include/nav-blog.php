<!-- new menu -->
<script>
/*
$(document).on("click", "#blogtab01", function() {
  url = "/treatment-blog-popular.php";
  window.location = url;
});
$(document).on("click", "#blogtab02", function() {
  url = "/treatment-blog-recent.php";
  window.location = url;
});
*/

$(document).on("click", "#navtab05", function() {
  url = "/treatment-blog.php";
  window.location = url;
});

</script>  

                      <li class="dropdown menu-large">
                          <a href="/treatment-blog.php" id="navtab05" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-commenting"></i> Blog  <i class="fa fa-caret-down"></i></a>
                          <ul class="dropdown-menu megamenu row">
                            <div class="container">
                              <div class="row col-lg-12">
                                 <div class="tab-wra"> 
                                        <div class="media">
                                            <div class="parent pull-left">
                                                <ul class="nav  nav-stacked">
                                                    <li class="active"><a href="#blogtab1" id="blogtab01" data-toggle="tab" class="analistic-01">Popular</a></li>
                                                    <li class=""><a href="#blogtab2" id="blogtab02" data-toggle="tab" class="analistic-02">Recently Added</a></li>
                                                </ul>
                                            </div>

                                            <div class="parent media-body">
                                                <div class="tab-content">
                                                  <div class="tab-pane fade active in" id="blogtab1">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Blog' and content != '' order by createDate asc ");
                                                              ?>
                                                              <?php include 'include/mashnav-get-content.php';  ?>
                                                          </div>                                
                                                        </div> <!-- media-body -->
                                                    </div><!-- media -->
                                                  </div> <!-- id -->

                                                  <div class="tab-pane fade" id="blogtab2">
                                                     <div class="media">
                                                        <div class="media-body">
                                                           <div class="col-lg-12">  
                                                              <?php                                                                  
                                                                  $result=mysql_query("SELECT * FROM attContent WHERE mainCat='Blog' and content != '' order by createDate desc ");
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
