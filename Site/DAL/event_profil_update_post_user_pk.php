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
	ev_nb_subscribed = "'.$event_array['ev_nb_subscribed'].'",
	ev_charged_member=(SELECT user_pk
			   FROM user
			   WHERE user_pk = '.$event_array['ev_charged_member'].'
			),
	ev_com_linked=(SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$event_array['ev_com_linked'].'
			  )
	WHERE ev_pk = "'.$event_array['ev_pk'].'" 
	');	
	echo('
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
	ev_nb_subscribed = "'.$event_array['ev_nb_subscribed'].'",
	ev_charged_member=(SELECT user_pk
			   FROM user
			   WHERE user_pk = '.$event_array['ev_charged_member'].'
			),
	ev_com_linked=(SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$event_array['ev_com_linked'].'
			  )
	WHERE ev_pk = "'.$event_array['ev_pk'].'" 
	');	
	
	

?>