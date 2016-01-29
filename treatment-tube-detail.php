<?php

    $key=$_GET{"id"};

    require_once 'config.php';
    mysql_select_db("rhdir", $con);

    //$result=mysql_query("SELECT * FROM attContent WHERE con_id=$key");
    $result=mysql_query("SELECT * FROM attContent WHERE contentURL='$key'");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
        $content=$contents['content'];
        $title=$contents['title'];
        $metaDesc=$contents['metaDesc'];
        $keywords=$contents['metaTags'];
        $author=$contents['author'];
		$videoFN=$contents['videoFN'];
        //$subcat=$contents['subCat'];
    }

    //we send the array as JSON object
    //echo json_encode($contentArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name='description' content=<?php echo "'" . $metaDesc . "'"; ?> >
    <meta name='keywords' content=<?php echo "'" . $keywords . "'"; ?> >
    <meta name='author' content=<?php echo "'" . $author . "'"; ?> >

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="/style.css" type="text/css" />

</head><!--/head-->

<body class="">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>
       
<section>
	<?php include 'include/videoSearchBar.php'; ?>
    <div class="container mainbg">
        <div class="row">

            <!--div class="fancy-title title-center title-dotted-border col-lg-9">
                <a name="tube-search"><h3>Treatment Tube Search</a></h3>
            </div-->

            

            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                <?php include 'include/tubeHeadlineVideo.php';  ?>
                <?php include 'include/tube-related.php';  ?>
                <?php include 'include/tube-recent-det.php';  ?>    

                <?php include 'include/featuredVideo.php';  ?>

            </div>

                <?php include 'include/rightsideArticle.php';  ?>

            
        </div>
        <!-- /.row -->
    </div>

</section>

    <!-- Call Banner -->
    <br/>        
    <?php include 'include/callBanner.php';  ?>
    <br/>

    <!-- Section Bottom -->
    <?php include 'include/bottom.php';  ?>

    <!-- Footer -->
    <?php include 'include/footer.php';  ?>    
        
    <!-- Script Footer -->
    <?php include 'include/footerScript.php';  ?>    

</body>
</html>