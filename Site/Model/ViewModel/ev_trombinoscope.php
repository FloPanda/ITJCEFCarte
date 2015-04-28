<?php




class ev_trombinoscope
{
		
	var $ev_pk;
	var $ev_name;
	var $ev_address;
	var $ev_date;
	var $ev_description;
	var $ev_picture;

  public function __construct(array $value) 
  {
	
	$this->ev_pk=$value['ev_pk'];
	$this->ev_name=$value['ev_name'];
	$this->ev_address=$value['ev_address'];
	$this->ev_date=$value['ev_date'];
	$this->ev_description=$value['ev_description'];
	$this->ev_picture=$value['ev_picture'];
  }
  
}

?>