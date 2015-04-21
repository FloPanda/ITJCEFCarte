<?php

class event_full
{
	var $ev_pk;
	var $ev_name;
	var $ev_address;
	var $ev_date;
	var $ev_description;
	var $ev_picture;
	var $ev_max_participants;
	var $ev_participants;
	var $ev_price;
	var $ev_nb_subscribed;
	var $ev_charged_member;
	var $ev_com_linked;

  

    public function __construct() 
  {
	$this->ev_name="non specifie";
	$this->ev_address="non specifie";
	$this->ev_date="1900-01-01";
	$this->ev_description="non specifie";
	$this->ev_picture="..\..\Ressources\Images\nopic_event.jpg";
	$this->ev_max_participants=0;
	$this->ev_participants=0;
	$this->ev_price=0;
	$this->ev_nb_subscribed=0;
	$this->ev_charged_member=null;
	$this->ev_com_linked=null;

  }
  
  
}

?>