
/*
 * Editor client script for DB table facilities
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.facilities.php',
		table: '#facilities',
		fields: [
			{
				"label": "Name",
				"name": "facName"
			},
			{
				"label": "Address 1",
				"name": "locStr1"
			},
			{
				"label": "Address 2",
				"name": "locStr2"
			},
			{
				"label": "City",
				"name": "locCity"
			},
			{
				"label": "State",
				"name": "locState"
			},
			{
				"label": "Zip",
				"name": "locZip"
			},
			{
				"label": "Zip + 4",
				"name": "locZip4"
			},
			{
				"label": "Phone",
				"name": "phone"
			},
			{
				"label": "Intake 1",
				"name": "intake1"
			},
			{
				"label": "Intake 2",
				"name": "intake2"
			},
			{
				"label": "Hotline 1",
				"name": "hotline1"
			},
			{
				"label": "Hotline 2",
				"name": "hotline2"
			},
			{
				"label": "Website",
				"name": "website"
			},
			{
				"label": "Image 1",
				"name": "image1"
			},
			{
				"label": "Image 2",
				"name": "image2"
			},
			{
				"label": "Image 3",
				"name": "image3"
			},
			{
				"label": "Image 4",
				"name": "image4"
			},
			{
				"label": "Image 5",
				"name": "image5"
			},
			{
				"label": "Create Date",
				"name": "createDate",
				"type": "datetime",
				"format": "YYYY-MM-DD"
			}
		]
	} );

	var table = $('#facilities').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.facilities.php',
		columns: [
			{
				"data": "facName"
			},
			{
				"data": "locStr1"
			},
			{
				"data": "locStr2"
			},
			{
				"data": "locCity"
			},
			{
				"data": "locState"
			},
			{
				"data": "locZip"
			},
			{
				"data": "locZip4"
			},
			{
				"data": "phone"
			},
			{
				"data": "intake1"
			},
			{
				"data": "intake2"
			},
			{
				"data": "hotline1"
			},
			{
				"data": "hotline2"
			},
			{
				"data": "website"
			},
			{
				"data": "image1"
			},
			{
				"data": "image2"
			},
			{
				"data": "image3"
			},
			{
				"data": "image4"
			},
			{
				"data": "image5"
			},
			{
				"data": "createDate"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

