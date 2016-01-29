
/*
 * Editor client script for DB table attContent
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.attContent.php',
		table: '#attContent',
		fields: [
			{
				"label": "Main Category",
				"name": "mainCat"
			},
			{
				"label": "Sub Category",
				"name": "SubCat"
			},
			{
				"label": "Content URL",
				"name": "contentURL"
			},
			{
				"label": "Content",
				"name": "content",
				"type": "ckeditor"
			},
			{
				"label": "Title",
				"name": "title"
			},
			{
				"label": "Author",
				"name": "author"
			},
			{
				"label": "Create Date",
				"name": "createDate",
				"type": "datetime",
				"format": "YYYY-MM-DD"
			},
			{
				"label": "Meta Tags",
				"name": "metaTags"
			},
			{
				"label": "Meta Desc",
				"name": "metaDesc"
			},
			{
				"label": "Video Filename",
				"name": "videoFN"
			},
			{
				"label": "Image 1 Filename",
				"name": "imageFN1"
			},
			{
				"label": "Image 2 Filename",
				"name": "imageFN2"
			},
			{
				"label": "Image 3 Filename",
				"name": "imageFN3"
			},
			{
				"label": "Image 4 Filename",
				"name": "imageFN4"
			},
			{
				"label": "Image 5 Filename",
				"name": "imageFN5"
			},
			{
				"label": "Content Source",
				"name": "contentSource"
			},
			{
				"label": "Featured Nav Video",
				"name": "featuredNavVid"
			},
			{
				"label": "Featured Side Bar Video",
				"name": "featuredSideBarVid"
			},
			{
				"label": "Featured Side Top Video",
				"name": "featuredSideBarTopVid"
			},
			{
				"label": "Featured Home Video",
				"name": "featuredHomevid"
			},
			{
				"label": "Featured Large Video",
				"name": "featuredLgVid"
			}
		]
	} );

	var table = $('#attContent').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.attContent.php',
		columns: [
			{
				"data": "mainCat"
			},
			{
				"data": "SubCat"
			},
			{
				"data": "contentURL"
			},
			{
				"data": "content"
			},
			{
				"data": "title"
			},
			{
				"data": "author"
			},
			{
				"data": "createDate"
			},
			{
				"data": "metaTags"
			},
			{
				"data": "metaDesc"
			},
			{
				"data": "videoFN"
			},
			{
				"data": "imageFN1"
			},
			{
				"data": "imageFN2"
			},
			{
				"data": "imageFN3"
			},
			{
				"data": "imageFN4"
			},
			{
				"data": "imageFN5"
			},
			{
				"data": "contentSource"
			},
			{
				"data": "featuredNavVid"
			},
			{
				"data": "featuredSideBarVid"
			},
			{
				"data": "featuredSideBarTopVid"
			},
			{
				"data": "featuredHomevid"
			},
			{
				"data": "featuredLgVid"
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

