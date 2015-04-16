<?php




class user_trombinoscope
{
		
	var $user_uuid;
	var $user_name;
	var $user_surname;
	var $user_jcef_function;
	var $user_picture;

  public function __construct(array $value) 
  {
	
	$this->user_name=$value['user_name'];
	$this->user_surname=$value['user_surname'];
	$this->user_jcef_function=$value['user_jcef_function'];
	$this->user_picture=$value['user_picture'];

  }
  
}

?>