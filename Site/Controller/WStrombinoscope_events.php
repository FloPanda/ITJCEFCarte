<?php	
	require( '../Model/ViewModel/ev_list_trombinoscope.php');

	$ev = new ev_list_trombinoscope();
	$evList = $ev->jsonSerialize();
	$evListEnc = json_encode($evList);
    if ($evListEnc) {
        header('Content-type: application/json');
        echo($evListEnc);
    } else {
        echo ("il y a eu une erreur : ");
        echo (json_last_error_msg ());
    }
?>