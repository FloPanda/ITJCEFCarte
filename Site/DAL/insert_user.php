<?php	
	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'INSERT INTO `user` 
			(
			`user_name`,
			`user_surname`,
			`user_is_admin`,
			`user_birth`,
			`user_sex`,
			`user_nation`,
			`user_user_type`,
			`user_member_type`,
			`user_jcef_function`,
			`user_status`,
			`user_company`,
			`user_company_title`,
			`user_cell_phone`,
			`user_land_phone`,
			`user_subscription_date`,
			`user_renew_date`,
			`user_last_amount`,
			`user_picture`,
			`user_uuid`,
			`user_password`,
			`user_email_jcef`,
			`user_email_company`,
			`user_email_perso`,
			`user_weixin`,
			`user_skype`,
			`user_qr_code_url`,
			`user_address`,
			`user_comment`
			)
			VALUES
			(
			"'.$us->user_name.'",
			"'.$us->user_surname.'",
			"'.$us->user_is_admin.'",
			"'.$us->user_birth.'",
			"'.$us->user_sex.'",
			"'.$us->user_nation.'",
			"'.$us->user_user_type.'",
			"'.$us->user_member_type.'",
			"'.$us->user_jcef_function.'",
			"'.$us->user_status.'",
			"'.$us->user_company.'",
			"'.$us->user_company_title.'",
			"'.$us->user_cell_phone.'",
			"'.$us->user_land_phone.'",
			NOW(),
			"'.$us->user_renew_date.'",
			"'.$us->user_last_amount.'",
			"'.$us->user_picture.'",
			"'.$us->user_uuid.'",
			"'.$us->user_password.'",
			"'.$us->user_email_jcef.'",
			"'.$us->user_email_company.'",
			"'.$us->user_email_perso.'",
			"'.$us->user_weixin.'",
			"'.$us->user_skype.'",
			"'.$us->user_qr_code_url.'",
			"'.$us->user_address.'",
			"'.$us->user_comment.'"
			)');
			
	
//"'.$us->user_subscription_date.'",

?>

