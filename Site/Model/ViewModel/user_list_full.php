<?php 

class user_list_full
{
	
  var $user_list;

  public function __construct() 
  {
	$count=0;
	$this->user_list=array();
	$user_array=null;

	
	include_once 'user_full.php';
	include '../DAL/user_full.php';
	foreach($user_array as $value)
	{
		
		array_push($this->user_list, new user_full($value));
		$count++;

	}
  
  
  }
  
}

?>