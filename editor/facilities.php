<?php
	include('session.php');
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>All Things Treatment Editor - facilities</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/jqc-1.11.3,moment-2.10.6,dt-1.10.10,b-1.1.0,se-1.1.0/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/s/dt/jqc-1.11.3,moment-2.10.6,dt-1.10.10,b-1.1.0,se-1.1.0/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		
		<script type="text/javascript" charset="utf-8" src="js/table.facilities.js"></script>

	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	</head>
	<body class="dataTables">

		<?php include 'include/header.php';  ?>

		<div class="">

			<h1>
				All Things Treatment Editor <span>facilities</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="facilities" width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address 1</th>
						<th>Address 2</th>
						<th>City</th>
						<th>State</th>
						<th>Zip</th>
						<th>Zip + 4</th>
						<th>Phone</th>
						<th>Intake 1</th>
						<th>Intake 2</th>
						<th>Hotline 1</th>
						<th>Hotline 2</th>
						<th>Website</th>
						<th>Image 1</th>
						<th>Image 2</th>
						<th>Image 3</th>
						<th>Image 4</th>
						<th>Image 5</th>
						<th>Create Date</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>
