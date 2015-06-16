	<?php	
		require( '../Model/DataModel/event_full_DM.php');
        header('Content-type: application/json');
		$event=new event_full($_GET['user_uuid']);
		echo json_encode($event);		
?>