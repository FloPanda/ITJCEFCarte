<?php




class user_trombinoscope
{
		
	var $uuid;
	var $user_surname;
	var $user_jcef_function;

  public function __construct(array $value) 
  {
	
	$this->user_name=$value['user_name'];
	$this->user_surname=$value['user_surname'];
	$this->user_jcef_function=$value['user_jcef_function'];

  }
  
}

?>