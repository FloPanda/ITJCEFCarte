<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	user_picture = "'.$user_array['user_picture'].'"
	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	');	
?>