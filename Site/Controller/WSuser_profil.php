<?php
	require( '../Model/DataModel/user_full_DM.php');
    header('Content-type: application/json');
	echo json_encode(new user_full($_GET['user_uuid']));
?>




