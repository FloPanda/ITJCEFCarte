<?php	
	require( '../Model/ViewModel/user_list_trombinoscope.php');
	require ('../DAL/sql_connect.php');

	$ult = new user_list_trombinoscope();
	$ultusers = $ult->jsonSerialize();
	$ultusersenc = json_encode($ultusers);
	echo $ultusersenc;
?>