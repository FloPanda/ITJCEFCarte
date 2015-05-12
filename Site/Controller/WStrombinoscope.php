	<?php	
		require( '../Model/ViewModel/user_list_trombinoscope.php');
		require ('../DAL/sql_connect.php');
		$userList=new user_list_trombinoscope();
		echo json_encode($userList);	
	?>