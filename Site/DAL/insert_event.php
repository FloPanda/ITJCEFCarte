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
			`ev_nb_subscribed`
			)
			VALUES
			(
			"'.$ev->ev_name.'",
			"'.$ev->ev_address.'",
			"'.$ev->ev_date.'",
			"'.$ev->ev_description.'",
			"'.$ev->ev_picture.'",
			"'.$ev->ev_max_participants.'",
			0,
			'.$ev->ev_price.',
			0
			)');
			echo $ev->ev_name."<br>";
			echo $ev->ev_address."<br>";
			echo $ev->ev_date."<br>";
			echo $ev->ev_description."<br>";
			echo $ev->ev_picture."<br>";
			echo $ev->ev_max_participants."<br>";
			echo $ev->ev_participants."<br>";
			echo $ev->ev_price."<br>";
			echo $ev->ev_nb_subscribed."<br>";
			echo $ev->ev_charged_member."<br>";
			echo $ev->ev_com_linked."<br>";
		// ev_nb_subscribed: LES GENS AYANT PAYE

?>

