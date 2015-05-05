<?php 

class com_list_trombinoscope
{
	
  var $com_list;

  public function __construct() 
  {
	$count=0;
	$this->com_list=array();
	$com_array=null;

	include 'com_trombinoscope.php';
	include '../DAL/commission_full.php';
	
	foreach($com_array as $value)
	{
		
		array_push($this->com_list, new com_trombinoscope($value));
		$count++;

	}
  
  
  }
  
}

?>