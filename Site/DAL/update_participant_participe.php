<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'UPDATE 
	`participant` 
	SET 
	part_present=,
	part_subscribe=
	WHERE
	part_user_pk=(SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$event_array['participant'].')
	and
	part_ev_pk=(SELECT ev_pk
			   FROM event
			   WHERE ev_pk = '.$event_array['ev_pk'].'
			  ),		   
	')
	or die('Error: '.mysqli_error($link));
	
	

	
?>