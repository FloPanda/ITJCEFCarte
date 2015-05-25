<?php	

ini_set('display_errors',1);
error_reporting(E_ALL);

	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'DELETE FROM `participant` 
	WHERE
	part_user_pk=(SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$event_array['participant'].'
			)
	and
	part_ev_pk=(SELECT ev_pk
			   FROM event
			   WHERE ev_pk = '.$event_array['ev_pk'].'
			  )
			'
			);
			

?>
