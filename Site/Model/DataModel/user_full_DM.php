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

  

    public function __construct() 
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
	$this->user_picture="../../Ressources/Images/nopic.jpg";
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

?>