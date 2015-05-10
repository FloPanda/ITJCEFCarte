<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	event
	SET 
	
	ev_picture = "'.$event_array['ev_picture'].'",
	ev_address = "'.$event_array['ev_address'].'",
	ev_date = "'.$event_array['ev_date'].'",
	ev_description = "'.$event_array['ev_description'].'",
	ev_max_participants = "'.$event_array['ev_max_participants'].'",
	ev_participants = "'.$event_array['ev_participants'].'",
	ev_price = "'.$event_array['ev_price'].'",
	ev_nb_subscribed = "'.$event_array['ev_nb_subscribed'].'"
	WHERE ev_pk = "'.$_POST['ev_pk'].'" 
	');	


?>
<!--,
	ev_charged_member = "'.$event_array['ev_charged_member'].'",
	ev_com_linked = "'.$event_array['ev_com_linked'].'"-->