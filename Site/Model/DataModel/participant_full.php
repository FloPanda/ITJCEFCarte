<?php

class commission_full
{
	var $part_pk;
	var $part_present;
	var $part_subscribed;
	var $part_ev_pk;
	var $part_user_pk
	;
    public function __construct($pk=null) 
  {
	if($pk!=null)
	{
		
		if(!isset($part_array))
		{ $part_array=null; }
	
		include '../DAL/part_full_from_pk.php';
		
		$this->part_pk=$part_array[0]['part_pk'];
		$this->part_present=$part_array[0]['part_present'];
		$this->part_subscribed=$part_array[0]['part_subscribed'];
		$this->part_ev_pk=$part_array[0]['part_ev_pk'];
		$this->part_user_pk=$part_array[0]['part_user_pk'];
		
	}
  

  }
  
  
}

?>