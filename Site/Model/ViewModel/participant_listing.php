<?php




class participant_listing
{
		
	var $part_pk;
	var $part_present;
	var $part_subscribed;
	var $part_ev_pk;
	var $part_user_pk;

  public function __construct(array $value) 
  {
	$this->part_pk=$value['part_pk'];
	$this->part_present=$value['part_present'];
	$this->part_subscribed=$value['part_subscribed'];
	$this->part_ev_pk=$value['part_ev_pk'];
	$this->part_user_pk=$value['part_user_pk'];
  }
  
}

?>