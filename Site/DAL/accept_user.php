<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	
    user_user_type = "'.$_POST['user_user_type'].'"

	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	'
	);	


?>