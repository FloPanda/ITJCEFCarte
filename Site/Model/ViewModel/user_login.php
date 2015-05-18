<?php




class user_login
{
		
	var $user_uuid;
	var $user_name;
	var $user_surname;
	var $user_password;

  public function __construct(array $value) 
  {
	
	$this->user_name=$value['user_name'];
	$this->user_surname=$value['user_surname'];
	$this->user_uuid=$value['user_uuid'];
	$this->user_password=$value['user_password'];

  }
  
}

?>