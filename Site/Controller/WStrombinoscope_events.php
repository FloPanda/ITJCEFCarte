	<?php	
		require( '../Model/ViewModel/ev_list_trombinoscope.php');
		$evList=new ev_list_trombinoscope();
		echo json_encode($evList);	
	?>