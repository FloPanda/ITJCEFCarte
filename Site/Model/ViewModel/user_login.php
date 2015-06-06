<?php




class user_login
{
		
	var $user_uuid;
	var $user_name;
	var $user_surname;
	var $user_password;
	var $user_is_admin;
	var $user_user_type;

  public function __construct(array $value) 
  {
	$this->user_user_type=$value['user_user_type'];
	$this->user_name=$value['user_name'];
	$this->user_surname=$value['user_surname'];
	$this->user_uuid=$value['user_uuid'];
	$this->user_pk=$value['user_pk'];
	$this->user_password=$value['user_password'];
	$this->user_is_admin=$value['user_is_admin'];

  }
  
}

?>