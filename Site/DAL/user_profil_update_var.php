<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	UPDATE 
	user
	SET 
	user_name = "'.$_POST['user_name'].'",
    user_surname = "'.$_POST['user_surname'].'",
    user_is_admin = "'.$_POST['user_is_admin'].'",
    user_birth = "'.$_POST['user_birth'].'",
    user_sex = "'.$_POST['user_sex'].'",
    user_nation = "'.$_POST['user_nation'].'",
    user_user_type = "'.$_POST['user_user_type'].'",
    user_member_type = "'.$_POST['user_member_type'].'",
    user_jcef_function = "'.$_POST['user_jcef_function'].'",
    user_status = "'.$_POST['user_status'].'",
    user_company = "'.$_POST['user_company'].'",
    user_company_title = "'.$_POST['user_company_title'].'",
    user_cell_phone = "'.$_POST['user_cell_phone'].'",
    user_land_phone = "'.$_POST['user_land_phone'].'",
    user_subscription_date = "'.$_POST['user_subscription_date'].'",
    user_renew_date = "'.$_POST['user_renew_date'].'",
    user_last_amount = "'.$_POST['user_last_amount'].'",
    user_picture = "'.$_POST['user_picture'].'",
    user_uuid = "'.$_POST['user_uuid'].'",
    user_password = "'.$_POST['user_password'].'",
    user_email_jcef = "'.$_POST['user_email_jcef'].'",
    user_email_company = "'.$_POST['user_email_company'].'",
    user_email_perso = "'.$_POST['user_email_perso'].'",
    user_weixin = "'.$_POST['user_weixin'].'",
	user_skype = "'.$_POST['user_skype'].'",
	user_qr_code_url = "'.$_POST['user_qr_code_url'].'",
	user_address = "'.$_POST['user_address'].'",
	user_comment = "'.$_POST['user_address'].'"

	WHERE user_uuid = "'.$_POST['user_uuid'].'" 
	'
	);	


?>