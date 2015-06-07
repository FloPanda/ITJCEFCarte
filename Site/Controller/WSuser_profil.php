<?php
	require( '../Model/DataModel/user_full_DM_pk.php');
	require ('../DAL/sql_connect.php');

	echo json_encode(new user_full($_GET['user_uuid']));
?>




