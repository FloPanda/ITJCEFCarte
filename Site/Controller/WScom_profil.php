<?php	
		require( '../Model/DataModel/commission_full_DM.php');
		header('Content-type: application/json');
		$com=new commission_full($_GET['com_pk']);
		echo json_encode($com);	
?>