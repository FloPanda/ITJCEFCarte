<?php	
	require( '../Model/ViewModel/user_list_trombinoscope.php');
	require ('../DAL/sql_connect.php');

	$ult = new user_list_trombinoscope();
	$ultusers = $ult->user_list;
	$ultusersenc = json_encode($ultusers);

?>