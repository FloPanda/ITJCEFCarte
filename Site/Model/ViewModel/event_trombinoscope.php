<?php




class event_trombinoscope
{
		
	var $ev_uuid;
	var $ev_name;
	var $ev_address;
	var $ev_date;
	var $ev_description;

  public function __construct(array $value) 
  {
	
	$this->ev_uuid=$value['ev_uuid'];
	$this->ev_name=$value['ev_name'];
	$this->ev_address=$value['ev_address'];
	$this->ev_date=$value['ev_date'];
	$this->ev_description=$value['ev_description'];
  }
  
}

?>