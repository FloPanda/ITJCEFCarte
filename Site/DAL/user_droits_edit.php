<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	user_jcef_function = "'.$_POST['user_jcef_function'].'",
    user_user_type = "'.$_POST['user_user_type'].'",
	user_is_admin = "'.$is_admin.'"
	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	'
	);	


?>