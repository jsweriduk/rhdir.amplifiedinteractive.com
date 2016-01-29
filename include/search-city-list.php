    <section id="bottoms">
        <!--div class="well container container-fluid wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"-->
        <div class="container container-fluid "  >
            <div class="row">
                <div class="col-md-9">
                    <div class=" elm-mainheader align-center heading active" data-plugin="toggle-slide" data-target="next" data-type="mobile">
                        
                       <h2 class="elm-maintitle align-center">Drug & Alcohol Recovery Centers in <?php echo ucfirst($fullname) ?></h2>
                    </div>

                    <div class="togglearea" style="display: block;">
                    
                        <ul class="list-locations clearfix">
                        <?php    

                            //  Filters
                            include 'include/filteredBy.php'; 
                            
                            foreach($productArray as $city) {
                                $clause = " WHERE ";//Initial clause
                                $sql="SELECT id FROM facilities as f INNER JOIN facServices2 as fs on (f.id=fs.fac_id )  ";//Query stub
                                foreach($_SESSION['keywords'] as $c){
                                    if(!empty($c)){
                                        $sql .= $clause." fs.".$c." = '1'";
                                        $clause = " AND ";//Change  to AND after 1st WHERE
                                       
                                    }   
                                }
                                $sql .=  $clause . "  f.locCity = '$city' ";
                                //echo $sql;//Remove after testing

                                $result=mysql_query($sql);
                                
                                $facArray = array();
                                while ($facs=mysql_fetch_assoc($result)) {
                                    $facArray[] = $facs['id'];
                                    $id = $facs['id'];
                                }


                                $count = mysql_num_rows($result);  
                                if ($count > 0 ) { 
                                    if ($count > 1 ) { 
                                        echo "<li class='col-xs-6 col-md-3 fa fa-plus-square-o'><a href='facilities.php?city=". $city . "'> " . $city . " (" . $count . ") </a></li>";
                                    }else{       
                                        echo "<li class='col-xs-6 col-md-3 fa fa-plus-square-o'><a href='facdetails.php?fac=". $id . "'> " . $city . " (" . $count . ") </a></li>";
                                    }    
                                }   
                            }
                         ?>           
                        </ul>
                    </div>
            </div>   
        </div>
    </section><!--/#bottom-->