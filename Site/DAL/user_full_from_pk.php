<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,"SELECT * FROM user");	// DAL
	$compte=0;
	while($row = mysqli_fetch_array($sql)) 
	{
		if($row['user_pk']==$pk)
		{
			$user_array[$compte]['user_user_type']=$row['user_user_type'];
			$user_array[$compte]['user_name']=$row['user_name'];
			$user_array[$compte]['user_surname']=$row['user_surname'];
			$user_array[$compte]['user_is_admin']=$row['user_is_admin'];
			$user_array[$compte]['user_birth']=$row['user_birth'];
			$user_array[$compte]['user_sex']=$row['user_sex'];
			$user_array[$compte]['user_nation']=$row['user_nation'];
			$user_array[$compte]['user_user_type']=$row['user_user_type'];
			$user_array[$compte]['user_member_type']=$row['user_member_type'];
			$user_array[$compte]['user_jcef_function']=$row['user_jcef_function'];
			$user_array[$compte]['user_status']=$row['user_status'];
			$user_array[$compte]['user_company']=$row['user_company'];
			$user_array[$compte]['user_company_title']=$row['user_company_title'];
			$user_array[$compte]['user_cell_phone']=$row['user_cell_phone'];
			$user_array[$compte]['user_land_phone']=$row['user_land_phone'];
			$user_array[$compte]['user_subscription_date']=$row['user_subscription_date'];
			$user_array[$compte]['user_renew_date']=$row['user_renew_date'];
			$user_array[$compte]['user_last_amount']=$row['user_last_amount'];
			$user_array[$compte]['user_picture']=$row['user_picture'];
			$user_array[$compte]['user_uuid']=$row['user_uuid'];
			$user_array[$compte]['user_pk']=$row['user_pk'];
			$user_array[$compte]['user_password']=$row['user_password'];
			$user_array[$compte]['user_email_jcef']=$row['user_email_jcef'];
			$user_array[$compte]['user_email_company']=$row['user_email_company'];
			$user_array[$compte]['user_email_perso']=$row['user_email_perso'];
			$user_array[$compte]['user_weixin']=$row['user_weixin'];
			$user_array[$compte]['user_skype']=$row['user_skype'];
			$user_array[$compte]['user_qr_code_url']=$row['user_qr_code_url'];
			$user_array[$compte]['user_address']=$row['user_address'];
			$user_array[$compte]['user_comment']=$row['user_comment'];
			
			$compte++;
		}
	}

	if ($compte==0)
	{
	 echo "fail ici: ".$pk;
	}

?>
