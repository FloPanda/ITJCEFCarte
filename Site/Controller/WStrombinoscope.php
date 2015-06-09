<?php	
	require( '../Model/ViewModel/user_list_trombinoscope.php');

	$ult = new user_list_trombinoscope();
	$ultusers = $ult->jsonSerialize();
	$ultusersenc = json_encode($ultusers);
    if ($ultusersenc) {
        header('Content-type: application/json');
        echo($ultusersenc);
    } else {
        echo ("il y a eu une erreur : ");
        echo (json_last_error_msg ());
    }
?>