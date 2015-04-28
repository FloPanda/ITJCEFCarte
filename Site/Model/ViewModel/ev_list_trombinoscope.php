<?php 

class ev_list_trombinoscope
{
	
  var $ev_list;

  public function __construct() 
  {
	$count=0;
	$this->user_list=array();
	$ev_array=null;

	include 'event_trombinoscope.php';
	include '../DAL/event_full.php';
	
	foreach($user_array as $value)
	{
		
		array_push($this->user_list, new event_trombinoscope($value));
		$count++;

	}
  
  
  }
  
}

?>