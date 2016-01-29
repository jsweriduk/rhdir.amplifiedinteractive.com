<?php

/*
 * Editor server script for DB table attContent
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'attContent', 'con_id' )
	->fields(
		Field::inst( 'mainCat' ),
		Field::inst( 'SubCat' ),
		Field::inst( 'contentURL' ),
		Field::inst( 'content' ),
		Field::inst( 'title' ),
		Field::inst( 'author' ),
		Field::inst( 'createDate' ),
/*			->validator( 'Validate::dateFormat', array( 'format'=>'Y-m-d' ) )
			->getFormatter( 'Format::date_sql_to_format', 'Y-m-d' )
			->setFormatter( 'Format::date_format_to_sql', 'Y-m-d' ),*/
		Field::inst( 'metaTags' ),
		Field::inst( 'metaDesc' ),
		Field::inst( 'videoFN' ),
		Field::inst( 'imageFN1' ),
		Field::inst( 'imageFN2' ),
		Field::inst( 'imageFN3' ),
		Field::inst( 'imageFN4' ),
		Field::inst( 'imageFN5' ),
		Field::inst( 'contentSource' ),
		Field::inst( 'featuredNavVid' ),
		Field::inst( 'featuredSideBarVid' ),
		Field::inst( 'featuredSideBarTopVid' ),
		Field::inst( 'featuredHomevid' ),
		Field::inst( 'featuredLgVid' )
	)
	->process( $_POST )
	->json();
