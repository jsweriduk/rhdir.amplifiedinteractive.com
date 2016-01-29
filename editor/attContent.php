<?php
	include('session.php');
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>All Things Treatment Editor - attContent</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/jqc-1.11.3,moment-2.10.6,dt-1.10.10,b-1.1.0,se-1.1.0/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/s/dt/jqc-1.11.3,moment-2.10.6,dt-1.10.10,b-1.1.0,se-1.1.0/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>

		<script type="text/javascript" charset="utf-8" src="js/editor.ckeditor.js"></script>
		<script type="text/javascript" charset="utf-8" src="ckeditor/ckeditor.js"></script>	

		<script type="text/javascript" charset="utf-8" src="js/table.attContent.js"></script>

	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</head>
	<body class="dataTables">
		<div class="">

			<?php include 'include/header.php';  ?>

			<h1>
				All Things Treatment Editor <span>attContent</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="attContent" width="100%">
				<thead>
					<tr>
						<th>Main Category</th>
						<th>Sub Category</th>
						<th>Content URL</th>
						<th>Content</th>
						<th>Title</th>
						<th>Author</th>
						<th>Create Date</th>
						<th>Meta Tags</th>
						<th>Meta Desc</th>
						<th>Video Filename</th>
						<th>Image 1 Filename</th>
						<th>Image 2 Filename</th>
						<th>Image 3 Filename</th>
						<th>Image 4 Filename</th>
						<th>Image 5 Filename</th>
						<th>Content Source</th>
						<th>Featured Nav Video</th>
						<th>Featured Side Bar Video</th>
						<th>Featured Side Top Video</th>
						<th>Featured Home Video</th>
						<th>Featured Large Video</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>
