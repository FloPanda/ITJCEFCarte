<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	user_password = "'.$user_array['user_password'].'"
	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	');	
?>