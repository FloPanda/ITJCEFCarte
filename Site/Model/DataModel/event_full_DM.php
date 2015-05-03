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
	var $ev_charged_member; //uuid
	var $ev_com_linked; //pk

  

    public function __construct($pk=null) 
  {
  
	  if($pk!=null)
	  {
		include '../DAL/event_full_from_pk.php';
		
		$this->ev_pk=$event_array[0]['ev_pk'];
		$this->ev_name=$event_array[0]['ev_name'];
		$this->ev_address=$event_array[0]['ev_address'];
		$this->ev_date=$event_array[0]['ev_date'];
		$this->ev_description=$event_array[0]['ev_description'];
		$this->ev_picture=$event_array[0]['ev_picture'];
		$this->ev_max_participants=$event_array[0]['ev_max_participants'];
		$this->ev_participants=$event_array[0]['ev_participants'];
		$this->ev_price=$event_array[0]['ev_price'];
		$this->ev_nb_subscribed=$event_array[0]['ev_nb_subscribed'];
		$this->ev_charged_member=$event_array[0]['ev_charged_member'];
		$this->ev_com_linked=$event_array[0]['ev_com_linked'];
		
		
	  }
	  else
	  {
	
		$this->ev_name="non specifie";
		$this->ev_address="non specifie";
		$this->ev_date="1900-01-01";
		$this->ev_description="non specifie";
		$this->ev_picture="../Ressources/Images/nopic.jpg";
		$this->ev_max_participants=0;
		$this->ev_participants=0;
		$this->ev_price=0;
		$this->ev_nb_subscribed=0;
		$this->ev_charged_member=null;
		$this->ev_com_linked=null;
		
	}

  }
  
  
}

?>