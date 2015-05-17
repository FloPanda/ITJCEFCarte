	<?php	
		require( '../Model/DataModel/event_full_DM.php');
		require ('../DAL/sql_connect.php');
		$event=new event_full();
		echo json_encode($event);	
	?>