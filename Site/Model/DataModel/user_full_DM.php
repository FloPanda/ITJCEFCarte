<?php

class user_full
{
	var $user_name;
	var $user_surname;
	var $user_is_admin;
	var $user_birth;
	var $user_sex;
	var $user_nation;
	var $user_user_type;
	var $user_member_type;
	var $user_jcef_function;
	var $user_status;
	var $user_company;
	var $user_company_title;
	var $user_cell_phone;
	var $user_land_phone;
	var $user_subscription_date;
	var $user_renew_date;
	var $user_last_amount;
	var $user_picture;
	var $user_uuid;
	var $user_password;
	var $user_email_jcef;
	var $user_email_company;
	var $user_email_perso;
	var $user_weixin;
	var $user_skype;
	var $user_qr_code_url;
	var $user_address;
	var $user_comment;

  

  public function __construct($uuid=null) 
  {
  
  if($uuid!=null)
  {
  include '../DAL/user_full_from_id.php';
  
	$this->user_name=$user_array[0]['user_name'];
	$this->user_surname=$user_array[0]['user_surname'];
	$this->user_is_admin=$user_array[0]['user_is_admin'];
	$this->user_birth=$user_array[0]['user_birth'];
	$this->user_sex=$user_array[0]['user_sex'];
	$this->user_nation=$user_array[0]['user_nation'];
	$this->user_user_type=$user_array[0]['user_user_type'];
	$this->user_member_type=$user_array[0]['user_member_type'];
	$this->user_jcef_function=$user_array[0]['user_jcef_function'];
	$this->user_status=$user_array[0]['user_status'];
	$this->user_company=$user_array[0]['user_company'];
	$this->user_company_title=$user_array[0]['user_company_title'];
	$this->user_cell_phone=$user_array[0]['user_cell_phone'];
	$this->user_land_phone=$user_array[0]['user_land_phone'];
	$this->user_subscription_date=$user_array[0]['user_subscription_date'];
	$this->user_renew_date=$user_array[0]['user_renew_date'];
	$this->user_last_amount=$user_array[0]['user_last_amount'];
	$this->user_picture=$user_array[0]['user_picture'];
	$this->user_uuid=$user_array[0]['user_uuid'];
	$this->user_password=$user_array[0]['user_password'];
	$this->user_email_jcef=$user_array[0]['user_email_jcef'];
	$this->user_email_company=$user_array[0]['user_email_company'];
	$this->user_email_perso=$user_array[0]['user_email_perso'];
	$this->user_weixin=$user_array[0]['user_weixin'];
	$this->user_skype=$user_array[0]['user_skype'];
	$this->user_qr_code_url=$user_array[0]['user_qr_code_url'];
	$this->user_address=$user_array[0]['user_address'];
	$this->user_comment=$user_array[0]['user_comment'];
	}
	else
	{
  
	$this->user_name=null;
	$this->user_surname=null;
	$this->user_is_admin=null;
	$this->user_birth=null;
	$this->user_sex=null;
	$this->user_nation=null;
	$this->user_user_type=null;
	$this->user_member_type=null;
	$this->user_jcef_function=null;
	$this->user_status=null;
	$this->user_company=null;
	$this->user_company_title=null;
	$this->user_cell_phone=null;
	$this->user_land_phone=null;
	$this->user_subscription_date=null;
	$this->user_renew_date=null;
	$this->user_last_amount=null;
	$this->user_picture="../Ressources/Images/nopic.jpg";
	$this->user_uuid=null;
	$this->user_password="achanger";
	$this->user_email_jcef=null;
	$this->user_email_company=null;
	$this->user_email_perso=null;
	$this->user_weixin=null;
	$this->user_skype=null;
	$this->user_qr_code_url=null;
	$this->user_address=null;
	$this->user_comment=null;
	}
  }
  
  
}

?>