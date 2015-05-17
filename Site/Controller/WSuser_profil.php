	<?php	
		require( '../Model/DataModel/user_full_DM.php');
		require ('../DAL/sql_connect.php');
		$user=new user_full();
		echo json_encode($user);	
	?>