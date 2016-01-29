                                                              <?php
                                                                  echo "<div class='service-listing'>";
                                                                  $contentArray = array();
                                                                  $result=mysql_query("SELECT * FROM `svcCdSubCat` as s, svcCdMainCat as m WHERE s.parentId = m.main_id and m.main_id='$mainId' ");
                                                                  while ($contents=mysql_fetch_assoc($result)) {
                                                                      $contentArray[] = $contents;
                                                                      $mLabel=$contents['mainLabel'];
                                                                  }
                                                                  echo "<h4 class='service-title'>" . $mLabel . "</h4>";
                                                                  foreach($contentArray as $row) {
                                                                      $sLabel = $row['subLabel'];
                                                                      $sCd = $row['sub_Id'];

                                                                      /* check if service exists */
                                                                      $result2 = mysql_query("SELECT * FROM facServices2 WHERE fac_id = '" . $id . "' and ". $sCd . " = '" . $sCd . "'");                                                                      
                                                                      if (mysql_fetch_array($result2) !== false) {
                                                                        $check = "fa-square-o";
                                                                      } else {
                                                                        $check = "fa-check-square-o";
                                                                      }  

                                                                      echo "<span><li class='col-xs-12 fa " . $check . "'>    "  . $sLabel . "</li></span>";                                                                     
                                                                  }
                                                                  echo "</div>";   
                                                              ?>

