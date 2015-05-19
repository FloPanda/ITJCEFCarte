<?php	

ini_set('display_errors',1);
error_reporting(E_ALL);

	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'INSERT INTO `participant` 
			(
			`part_user_pk`,
			`part_ev_pk`,
			`part_present`,
			`part_subscribed`
			)
			VALUES
			(
			(SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$event_array['participant'].'
			),
			(SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$event_array['ev_com_linked'].'
			  ),
			0,
			0
			)'
			);

?>
