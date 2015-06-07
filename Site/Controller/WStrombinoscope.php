<?php	
	require( '../Model/ViewModel/user_list_trombinoscope.php');
	require ('../DAL/sql_connect.php');

	$ult = new user_list_trombinoscope();
	$ultusers = $ult->jsonSerialize();
	$ultusersenc = json_encode($ultusers);

	/*echo "[";
	for ($i=0 ; $i<count($ultusers);$i++) {
		echo (json_encode($ultusers[$i]));
		if($i<count($ultusers)-2)
		{
				echo ",";
		}
	}
	echo "]";*/
?>