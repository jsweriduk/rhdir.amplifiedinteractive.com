    <!-- Search Bar -->
    <script>
        $(document).ready(function(){
            $("#advSearch, #updSearch, #closeSearch").click(function(){
                $("#customSearch").slideToggle('hidden');
            });
        });
    </script>


<!-- Search Bar -->

        <div class="searchbar" >
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-lg-12 searchbar-title">
                            <span>Search Treatment Centers by:</span>              
                        </div>                                

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default visible-md visible-lg">State</button>                                
                                </span>
                                <input id="state" name="state" type="text" class="form-control"  placeholder="State Code&hellip;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default visible-md visible-lg">City</button>                                
                                </span>
                                <input id="city" name="city" type="text" class="form-control"  placeholder="City Name&hellip;">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default visible-md visible-lg">Zip</button>                                
                                </span>
                                <input id="zip" name="zip" type="text" class="form-control"  placeholder="Zip Code&hellip;">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <!--input type="hidden" id="fac_id" name="fac_id" /-->
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default visible-md visible-lg">Name</button>                                
                                </span>
                                <input id="keywords" name="keywords" type="text" class="form-control" placeholder="Facility Name&hellip;">
                            </div>
                        </div>
                        <div id="advSearch" class="advanced-search">
                            <a>Advanced Search <i class="fa fa-caret-down"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div> 


        <div id="customSearch"  style="display:none" class="searchbar" >
            
            <div class="well container container-fluid wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <!--div id="closeSearch">
                <a><center><i class="fa fa-times-circle"></i> close </center></a>
            </div-->

                    <div class="row">
                             

                        <form action="search-custom.php" method="get">
                            <!--div class="col-md-2 ">
                                <div class="input-group ">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default visible-md visible-lg">State</button>                                
                                    </span>
                                    <input id="state" name="state" type="text" class="form-control"  placeholder="State Code&hellip;">
                                </div>
                            </div--> 
                            
                            <div class="col-sm-5">                               
                                    <input class="btn-md btn btn-warning readmore" type="submit" id="submit" name="submit" value="SEARCH">
                            </div>
                            <div id="closeSearch" class="col-sm-7">
                                <a><i class="fa fa-times-circle"></i> close </a>
                            </div>


                            <div class="col-sm-12 advsearchbar-title">
                                <span>Select Preferred Services Below:</span>           
                            </div> 

                            <!--div class="col-md-1">          
                                    <input class="btn btn-default btn-md" type="reset" value="Clear">  
                            </div><br/-->
                        


                                <div class="col-lg-6">
                                    <div class="checkbox-services">  
                                        <?php $mainId='1'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                     <div class="checkbox-services">  
                                        <?php $mainId='2'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div>                                   
                                    <div class="checkbox-services">  
                                        <?php $mainId='3'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                     <div class="checkbox-services">  
                                        <?php $mainId='5'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 



                                </div>
                                <div class="col-lg-6">
                                     <div class="checkbox-services">  
                                        <?php $mainId='8'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                     <div class="checkbox-services">  
                                        <?php $mainId='7'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                     <div class="checkbox-services">  
                                        <?php $mainId='9'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                     <div class="checkbox-services">  
                                        <?php $mainId='10'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                    <div class="checkbox-services">  
                                        <?php $mainId='4'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                    <div class="checkbox-services">  
                                        <?php $mainId='6'; ?>
                                        <?php include 'include/checkbox-services.php';  ?>
                                    </div> 
                                </div>
                            
                        </form>

                    </div>
                
            </div>
        </div> 

