<?php 

class ev_list_trombinoscope
{
	
  var $ev_list;

  public function __construct() 
  {
	$count=0;
	$this->ev_list=array();
	$event_array=null;

	include 'ev_trombinoscope.php';
	include '../DAL/event_full.php';
	
	foreach($event_array as $value)
	{
		
		array_push($this->ev_list, new ev_trombinoscope($value));
		$count++;

	}
  
  
  }
  
}

?>