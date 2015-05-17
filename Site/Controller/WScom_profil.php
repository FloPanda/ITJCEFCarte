	<?php	
		require( '../Model/DataModel/commission_full_DM.php');
		require ('../DAL/sql_connect.php');
		$com=new commission_full();
		echo json_encode($com);	
	?>