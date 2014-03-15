<?php
	define('WP_USE_THEMES', false);
	require('../../../wp-load.php');

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$email = $_POST['email'];

	echo "Your e-mail was sent";
	// Send communications@bulac.com a message that this person wants to be added
	wp_mail( 'communications@bulac.org', $email . 'wishes to be added to the list', 'Hello '.$email.' wants to be added to the BULAC listserv.' );

	wp_redirect( add_query_arg( 'status','success', home_url() ) ); exit;	
