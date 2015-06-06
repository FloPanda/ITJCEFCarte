<?php




class user_full
{
		
	var $user_name;
	var $user_pk;
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

  public function __construct(array $value) 
  {
  
	$this->user_name=$value['user_name'];
	$this->user_pk=$value['user_pk'];
	$this->user_surname=$value['user_surname'];
	$this->user_is_admin=$value['user_is_admin'];
	$this->user_birth=$value['user_birth'];
	$this->user_sex=$value['user_sex'];
	$this->user_nation=$value['user_nation'];
	$this->user_user_type=$value['user_user_type'];
	$this->user_member_type=$value['user_member_type'];
	$this->user_jcef_function=$value['user_jcef_function'];
	$this->user_status=$value['user_status'];
	$this->user_company=$value['user_company'];
	$this->user_company_title=$value['user_company_title'];
	$this->user_cell_phone=$value['user_cell_phone'];
	$this->user_land_phone=$value['user_land_phone'];
	$this->user_subscription_date=$value['user_subscription_date'];
	$this->user_renew_date=$value['user_renew_date'];
	$this->user_last_amount=$value['user_renew_date'];
	$this->user_picture=$value['user_picture'];
	$this->user_uuid=$value['user_uuid'];
	$this->user_password=$value['user_password'];
	$this->user_email_jcef=$value['user_email_jcef'];
	$this->user_email_company=$value['user_email_company'];
	$this->user_email_perso=$value['user_email_perso'];
	$this->user_weixin=$value['user_weixin'];
	$this->user_skype=$value['user_skype'];
	$this->user_qr_code_url=$value['user_qr_code_url'];
	$this->user_address=$value['user_address'];
	$this->user_comment=$value['user_comment'];

  }
  
}

?>