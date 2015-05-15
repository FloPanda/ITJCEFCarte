<?php	
	$link=null;
	include('sql_connect.php');
	$query = mysqli_query($link,
	'DELETE FROM `event` 
			WHERE
			ev_pk="'.$_POST['ev_pk'].'"
			');


?>
