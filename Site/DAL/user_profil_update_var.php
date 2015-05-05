<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	
	user_picture = "'.$user_array['user_picture'].'",
	user_jcef_function = "'.$user_array['user_jcef_function'].'",
	user_nation = "'.$user_array['user_nation'].'",
	user_company = "'.$user_array['user_company'].'",
	user_subscription_date = "'.$user_array['user_subscription_date'].'",
	user_email_jcef = "'.$user_array['user_email_jcef'].'",
	user_birth = "'.$user_array['user_birth'].'",
	user_sex = "'.$user_array['user_sex'].'",
	user_skype = "'.$user_array['user_skype'].'",
	user_weixin = "'.$user_array['user_weixin'].'"
	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	');	


?>

