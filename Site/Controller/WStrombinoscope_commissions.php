	<?php	
		require( '../Model/ViewModel/com_list_trombinoscope.php');
		$comList=new com_list_trombinoscope();
		echo json_encode($comList);	
	?>