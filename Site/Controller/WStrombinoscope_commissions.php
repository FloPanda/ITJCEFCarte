<?php	
	require( '../Model/ViewModel/com_list_trombinoscope.php');

	$com = new com_list_trombinoscope();
	$comList = $com->jsonSerialize();
	$comListEnc = json_encode($comList);
    if ($comListEnc) {
        header('Content-type: application/json');
        echo($comListEnc);
    } else {
        echo ("il y a eu une erreur : ");
        echo (json_last_error_msg ());
    }
?>