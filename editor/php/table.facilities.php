<?php

/*
 * Editor server script for DB table facilities
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
Editor::inst( $db, 'facilities', 'id' )
	->fields(
		Field::inst( 'facName' ),
		Field::inst( 'locStr1' ),
		Field::inst( 'locStr2' ),
		Field::inst( 'locCity' ),
		Field::inst( 'locState' ),
		Field::inst( 'locZip' ),
		Field::inst( 'locZip4' ),
		Field::inst( 'phone' ),
		Field::inst( 'intake1' ),
		Field::inst( 'intake2' ),
		Field::inst( 'hotline1' ),
		Field::inst( 'hotline2' ),
		Field::inst( 'website' ),
		Field::inst( 'image1' ),
		Field::inst( 'image2' ),
		Field::inst( 'image3' ),
		Field::inst( 'image4' ),
		Field::inst( 'image5' ),
		Field::inst( 'createDate' )
/*			->validator( 'Validate::dateFormat', array( 'format'=>'Y-m-d' ) )
			->getFormatter( 'Format::date_sql_to_format', 'Y-m-d' )
			->setFormatter( 'Format::date_format_to_sql', 'Y-m-d' )*/
	)
	->process( $_POST )
	->json();
