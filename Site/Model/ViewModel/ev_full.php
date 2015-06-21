<?php




class ev_trombinoscope
{
		
	var $ev_pk;
	var $ev_name;
	var $ev_address;
	var $ev_date;
	var $ev_description;
	var $ev_picture;
	var $ev_charged_member;
	var $ev_com_linked;
	var $ev_max_participants;
	var $ev_nb_subscribed;
	var $ev_participants;
	var $ev_price;

  public function __construct(array $value) 
  {
	
	$this->ev_pk=$value['ev_pk'];
	$this->ev_name=$value['ev_name'];
	$this->ev_address=$value['ev_address'];
	$this->ev_date=$value['ev_date'];
	$this->ev_description=$value['ev_description'];
	$this->ev_picture=$value['ev_picture'];
	$this->ev_charged_member=$value['ev_charged_member'];
	$this->ev_com_linked=$value['ev_com_linked'];
	$this->ev_max_participants=$value['ev_max_participants'];
	$this->ev_nb_subscribed=$value['ev_nb_subscribed'];
	$this->ev_participants=$value['ev_participants'];
	$this->ev_price=$value['ev_price'];
  }
  
}

?>