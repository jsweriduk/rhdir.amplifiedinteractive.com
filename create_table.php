<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);

   
    $sql="select fac_id, svcCode from facServices order by fac_id asc";
    $result=mysql_query($sql);

    $productArray = array();
	while ($products=mysql_fetch_assoc($result)) {
		//$productArray[] = $products['locCity'];
		$svcCode=$products['svcCode'];
		$id=$products['fac_id'];
	
		$sql="update facServices2  set ".$svcCode." ='1' where fac_id = " . $id . ";";
		//mysql_query($sql);

		//mysql_query("ALTER TABLE `facServices2` ADD `".$svcCode."` BOOLEAN NOT NULL FIRST;");


		if (mysql_query($sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysql_error($con);
		}

		echo $sql . " <BR/>";
	}	
?>
