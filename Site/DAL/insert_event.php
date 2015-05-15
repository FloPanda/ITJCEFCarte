<?php	

ini_set('display_errors',1);
error_reporting(E_ALL);

	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'INSERT INTO `event` 
			(
			`ev_name`,
			`ev_address`,
			`ev_date`,
			`ev_description`,
			`ev_picture`,
			`ev_max_participants`,
			`ev_participants`,
			`ev_price`,
			`ev_nb_subscribed`,
			`ev_charged_member`,
			`ev_com_linked`
			)
			VALUES
			(
			"'.$ev->ev_name.'",
			"'.$ev->ev_address.'",
			"'.$ev->ev_date.'",
			"'.$ev->ev_description.'",
			"'.$ev->ev_picture.'",
			'.$ev->ev_max_participants.',
			0,
			'.$ev->ev_price.',
			0,
			  (SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$ev->ev_charged_member.'
			),
			  (SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$ev->ev_com_linked.'
			  )
			)');
			
			echo 'INSERT INTO `event` 
			(
			`ev_name`,
			`ev_address`,
			`ev_date`,
			`ev_description`,
			`ev_picture`,
			`ev_max_participants`,
			`ev_participants`,
			`ev_price`,
			`ev_nb_subscribed`,
			`ev_charged_member`,
			`ev_com_linked`
			)
			VALUES
			(
			"'.$ev->ev_name.'",
			"'.$ev->ev_address.'",
			"'.$ev->ev_date.'",
			"'.$ev->ev_description.'",
			"'.$ev->ev_picture.'",
			'.$ev->ev_max_participants.',
			0,
			'.$ev->ev_price.',
			0,
			  (SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$ev->ev_charged_member.'
			),
			  (SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$ev->ev_com_linked.'
			  )';
			
		// ev_nb_subscribed: LES GENS AYANT PAYE

?>

