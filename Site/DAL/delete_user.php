<?php	
	$link=null;
	include('sql_connect.php');
	$query = mysqli_query($link,
	'DELETE FROM `user` 
			WHERE
			user_uuid="'.$_POST['user_uuid'].'"
			');


?>

