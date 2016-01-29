                            <?php
                            
                            if (!empty($_SESSION['keywords'])) {
                                echo "<div class='col-lg-12 filteredBy'><a id='updSearch'  class='col-xs-12'>Search Results Filtered by: <i class='fa fa-caret-down'></i></a>";
                                foreach($_SESSION['keywords'] as $c){
                                    if(!empty($c)){
                                        $sql="select subLabel from svcCdSubCat where sub_Id='".$c."' limit 1 ";
                                        

                                        $result=mysql_query($sql);
                                        while ($row = mysql_fetch_array($result)) 
                                        {
                                            $sLabel = $row['subLabel'];  
                                        }   
                                        echo "<span class='col-xs-6'> <li class='fa fa-check-square-o'>    "  . $sLabel . "</li></span>";  
                                    }   
                                }
                            
                                echo "</div>";
                            }
                            ?>