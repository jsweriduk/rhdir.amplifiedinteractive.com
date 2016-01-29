    <section id="bottoms">
        <!--div class="well container container-fluid wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"-->
        <div class="container container-fluid "  >
            <div class="row">
                <div class="col-md-9">
                    <div class=" elm-mainheader align-center heading active" data-plugin="toggle-slide" data-target="next" data-type="mobile">
                        
                       <h2 class="elm-maintitle align-center">Drug & Alcohol Recovery Centers </h2>
                    </div>

                    <div class="togglearea" style="display: block;">
                    
                        <ul class="list-locations clearfix">
                        <?php   

                            //  Filters
                            include 'include/filteredBy.php'; 
                            
                            foreach($productArray as $state) {
                                $clause = " WHERE ";//Initial clause
                                $sql="SELECT fac_id FROM facServices2 as fs INNER JOIN facilities as f on (f.id=fs.fac_id )  ";//Query stub
                                if(isset($_GET['submit'])){
                                    if(isset($_GET['keyword'])){
                                        foreach($_GET['keyword'] as $c){
                                            if(!empty($c)){
                                               // $sql .= $clause." svcCode = '{$c}'";
                                                $sql .= $clause." fs.".$c." = '1'";
                                                $clause = " and ";//Change  to OR after 1st WHERE
                                            }   
                                        }
                                    }
                                }
                                $sql .=  " and f.locState = '$state' ";
                                //echo $sql;//Remove after testing

                                $result=mysql_query($sql);
                                $fullname = array_search( strtolower($state), array_map('strtolower', $statesbw) );
                                $count = mysql_num_rows($result);  
                                if ($count > 0 ) { 
                                    echo "<li class='col-xs-6 col-md-3 fa fa-plus-square-o'><a href='search.php?state=". $state . "'> " . $fullname . " (" . $count . ") </a></li>";
                            }   }
                         ?>           
                        </ul>
                    </div>
            </div>   
        </div>
    </section><!--/#bottom-->