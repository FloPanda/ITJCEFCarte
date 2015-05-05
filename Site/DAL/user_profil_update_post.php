<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	
	user_picture = "'.$_POST['user_picture'].'",
	user_jcef_function = "'.$_POST['user_jcef_function'].'",
	user_nation = "'.$_POST['user_nation'].'",
	user_company = "'.$_POST['user_company'].'",
	user_subscription_date = "'.$_POST['user_subscription_date'].'",
	user_email_jcef = "'.$_POST['user_email_jcef'].'",
	user_birth = "'.$_POST['user_birth'].'",
	user_sex = "'.$_POST['user_sex'].'",
	user_skype = "'.$_POST['user_skype'].'",
	user_weixin = "'.$_POST['user_weixin'].'"
	WHERE user_uuid = "'.$_POST['user_uuid'].'" '
	);	


?>

