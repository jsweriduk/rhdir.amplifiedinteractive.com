                                                              <?php
                                                                  echo "<div class='service-listing'>";
                                                                  $contentArray1 = array();                                                                  
                                                                  $result1=mysql_query("SELECT * FROM `svcCdSubCat` as s, svcCdMainCat as m WHERE s.parentId = m.main_id and m.main_id='$mainId' ");
                                                                  while ($contents1=mysql_fetch_assoc($result1)) {
                                                                      $contentArray1[] = $contents1;
                                                                      $mLabel1=$contents1['mainLabel'];
                                                                  }
                                                                  echo "<span class='service-title'>" . $mLabel1 . "</span>";
                                                                  foreach($contentArray1 as $row1) {
                                                                      $sLabel1 = $row1['subLabel'];
                                                                      $sCd1 = $row1['sub_Id'];
                                                                      
                                                                      if (isset($_SESSION['keywords'][$sCd1])){
                                                                        $checked='checked';
                                                                      }else{
                                                                        $checked='';
                                                                      } 

                                                                      echo "<li class='col-xs-12'><input id='".$sCd1."' " . $checked ."  name='keyword[]' type='checkbox' value='" . $sCd1 ."' /> "  . $sLabel1 . "</li>"; 
                                                                  }
                                                                  echo "</div>";   
                                                              ?>

