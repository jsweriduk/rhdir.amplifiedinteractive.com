<?php

    $key=$_GET{"id"};

    //echo $key;

    require_once 'config.php';
    mysql_select_db("rhdir", $con);
    
    //$result=mysql_query("SELECT * FROM attContent WHERE con_id=$key");
    $result=mysql_query("SELECT * FROM attContent WHERE contentURL='$key'");

    $image="";
    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
        $content=$contents['content'];
        $title=$contents['title'];
        $metaDesc=$contents['metaDesc'];
        $keywords=$contents['metaTags'];
        $author=$contents['author'];
        $cdate=$contents['createDate'];
		$subcat=$contents['subCat'];
		$maincat=$contents['mainCat'];
		$image2=$contents['imageFN1'];
        /*$image1 = $contents['imageFN1'];
        if (empty($image1)) {
            $image1  = str_replace(" ","-",$title);
            $image1  = strtolower($image1);
            $imageThumb1 = $image1 + "-thumb.png"; 
            $image1 .= ".png";
        }*/
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
    
	<!-- Article Search Bar-->
	<?php include 'include/articleSearchBar.php'; ?>	
<section>
    <div class="container clearfix">
        <div class="row">

            <!--div class="container-fluid col-lg-9 wow fadeInDowns"-->
            <div class="col-lg-9">

                <?php include 'include/articleHeadline.php';  ?>
				
				
                <?php include 'include/article-related.php';  ?>
                <?php include 'include/article-recent.php';  ?>
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