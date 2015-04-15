<?php 

class user_list_uuid
{
	
  var $user_list_uuid;

  public function __construct() 
  {
	$count=0;
	$this->user_list_uuid=array();
	$user_array=null;

	include 'user_uuid.php';
	include '../DAL/user_full.php';
	
	foreach($user_array as $value)
	{
		
		array_push($this->user_list_uuid, new user_uuid($value));
		$count++;

	}
  
  
  }
  
}

?>