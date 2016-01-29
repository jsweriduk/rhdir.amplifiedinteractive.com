<?php

    $result=mysql_query("SELECT * FROM attContent WHERE mainCat='News' and subCat='Health Care' and content != '' order by createDate desc limit 1 offset 2");

    $contentArray = array();
    while ($contents=mysql_fetch_assoc($result)) {
        $contentArray[] = $contents;
    }   
    foreach($contentArray as $row) {
        $shortContent = substr($row['content'], 0, 70);
        if (!empty($shortContent)) {
            $shortContent .= '...';
        }
        if (strlen($row['title']) > 47 ) {
            $shortTitle = substr($row['title'], 0, 47);
            $shortTitle .= '...';
        }else {
            $shortTitle = $row['title'];
        }
                              /*  $image1 = $row['imageFN1'];
                                if (empty($image1)) {
                                    $image1="thumb-test-1.png";
                                }*/
        $image1 = $row['imageFN1'];
        $imageurl = "images/content/";
		$fullImageUrl = $imageurl . $image1;
		$articleUrl = "article-content-detail.php?id=" . $row['con_id'];
		$metadesc = $row['metaDesc'];
		if(strlen($metadesc) > 137) {
			$metadesc = substr($metadesc,0,137) . "...";
		}
?>   


<div class="tab-pane fade active in news-content" id="tab1">
    <div class="media">
         <div class="pull-left news-section-image-container">
			<img class="img-responsive news-section-image" src='<?php echo $fullImageUrl; ?>' >
        </div>
        <div class="media-body">
            <h2 class="news-title"><?php echo $shortTitle ?></h2>
            <p><?php echo substr($metadesc,0,280); ?></p>
			<div class="news-section-read-more">
				<a class="btn btn-warning readmore" href='<?php echo $articleUrl; ?>'>Read More <i class="fa fa-angle-right"></i></a>
			</div>
        </div>
    </div>
</div>

	<?php } ?>