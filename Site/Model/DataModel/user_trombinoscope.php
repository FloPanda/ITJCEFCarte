<?php




class user_trombinoscope
{
		
	var $user_name;
	var $user_surname;
	var $user_jcef_function;

  public function __construct(array $value) 
  {
	
	$this->user_name=$value[0];
	$this->user_surname=$value[1];
	$this->user_jcef_function=$value[2];
	

  }
  
}

?>