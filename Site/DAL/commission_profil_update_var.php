<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	commission
	SET 
	
	com_picture = "'.$com_array['com_picture'].'",
	com_description = "'.$com_array['com_description'].'",
	com_name="'.$com_array['com_name'].'"
	WHERE com_pk = "'.$_POST['com_pk'].'" 
	');	


?>
<!--,
	ev_charged_member = "'.$event_array['ev_charged_member'].'",
	ev_com_linked = "'.$event_array['ev_com_linked'].'"-->