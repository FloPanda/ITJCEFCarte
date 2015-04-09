<?php 

class user_list_trombinoscope
{
	
  var $user_list;

  public function __construct() 
  {
	$count=0;
	$this->user_list=array();
	$user_array=null;

	include 'user_trombinoscope.php';
	include '../Bus/bus_trombi_1.php';
	
	//$this->user_list=$user_array;
	
	foreach($user_array as $value)
	{
		
		array_push($this->user_list, new user_trombinoscope($value));
		$count++;

	}
  
  
  }
  
}

?>