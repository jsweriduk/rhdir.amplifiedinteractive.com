<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Amplified Interactive | Rehabs</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="style.css" type="text/css" />

</head><!--/head-->

<body class="homepage">
  
            <!-- Header -->
            <?php include 'include/mashableNav.php';  ?>
                 
<section>
	<div class="clearfix">
	
            <!-- Search Bar --> 
            <?php include 'include/searchbar.php';  ?>
				
    </div>
	
	    <!-- Section Bottom -->
	<div class="container">
		<div class="col-lg-9 col-md-9">
			<?php include 'include/findTreatment.php';  ?>
		</div>
		<div class="col-lg-3">
			<?php include 'include/featuredTreatmentCentersSideBar.php'; ?>
		</div>
	</div>
	<br>
	<br>
	<?php include 'include/callBanner.php';  ?>



<?php                                                                  
$result=mysql_query("SELECT * FROM facilities WHERE 
                                                                    lower(svcText1) like '%residential%' or
                                                                    lower(svcText2) like '%residential%' or
                                                                    lower(svcText3) like '%residential%' or
                                                                    lower(svcText4) like '%residential%' or
                                                                    lower(svcText5) like '%residential%' or
                                                                    lower(svcText6) like '%residential%' or
                                                                    lower(svcText7) like '%residential%' order by createDate desc limit 18");

?>
<section id="">
				<div class="container">
                    <div class="">
						<br>
                        <h1 class="treatment-heading find-treatment" style="padding-left: 30px;">Residential Treatment Centers</h1>
                    </div>

                    <div id="find-detox" class="col-lg-9">

                                                              <?php      
                                                                  $navfaccontentArray = array();
                                                                  while ($navfaccontents=mysql_fetch_assoc($result)) {
                                                                      $navfaccontentArray[] = $navfaccontents;
                                                                  }
                                                                  foreach($navfaccontentArray as $navfaccontent): {
                                                                      $shortName = substr($navfaccontent['facName'], 0, 55);
                                                                      if (!empty($shortName)) {
                                                                          $shortName .= '...';
                                                                      }
                                                                      if (strlen($navfaccontent['facName']) > 24 ) {
                                                                         $shortTitle = substr($navfaccontent['facName'], 0, 24);
                                                                         $shortTitle .= '...';
                                                                      }else {
                                                                          $shortTitle = $navfaccontent['facName'];
                                                                      }
                                                                      /*$image1 = $navfaccontent['imageFN1'];
                                                                      $imageThumb1 = $image1;
                                                                      if (empty($image1)) {
                                                                          $image1  = str_replace(" ","-",$navfaccontent['title']);
                                                                          $image1  = strtolower($image1);
                                                                          $imageThumb1 = $image1 + "-thumb.png"; 
                                                                          $image1 .= ".png";
                                                                      }*/
                                                                      $strAddr = $navfaccontent['locStr1']. ' ' . $navfaccontent['locCity']. ',' .$navfaccontent['locState']. ' ' . $navfaccontent['locZip'];
                                                                      
                                                                      /*$image1="";
                                                                      $image1  = $navfaccontent['image1']);
                                                                      $imageThumb1 = $image1 . "-thumb.png"; 
                                                                     
                                                                      $imageurl = "images/content/";

                                                                      $imageurl = "images/samples/";
                                                                      $imageThumb1 = "the-lakes-thumb.png";

                                                                      $imageurl = "http://placehold.it/";
                                                                      $imageThumb1 = "300x250";*/

                                                                      $urlDetail = "facdetails.php";
                                                                      $imageurl ="https://maps.googleapis.com/maps/api/streetview?size=200x200&location=". $strAddr ."&key=AIzaSyD91JMyrgZUaGi7wm6b43wrk72xBQsmjPs";
                                                                  
                                                                      if ($i++ == 3) {break;}
                                                                  }   
                                                              ?>
                                                                <div class="video col-lg-4">   
                                                                    <div class="ipost clearfix find-treatment-panel">
                                                                        <div class="media">
                                                                            <div class="entry-image">                        
                                                                              <?php echo "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'><img class='img-responsive treatment-center-image' width='200px' src='". $imageurl . "'></a>"; ?>
                                                                            </div>
                                                                            <div class="entry-content">
                                                                              <?php echo   "<a href='". $urlDetail . "?fac=". $navfaccontent['id'] . "'> " . $shortName . "</a><br/>"; ?>
                                                                              <!--?php echo   "<span>" . $shortTitle . "</span>"; ?-->
                                                                            </div>       
                                                                        </div>
                                                                    </div>
																	
																<br>
																<br>
                                                                </div>
                                                              <?php
                                                                endforeach
                                                              ?>
															  
              			  </div>
						  <?php include 'include/rightside.php'; ?>
		</div>
	</section>
    <!-- Footer -->
    <?php include 'include/footer.php';  ?>    
        
    <!-- Script Footer -->
    <?php include 'include/footerScript.php';  ?>    

</body>
</html>