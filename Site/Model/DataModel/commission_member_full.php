<?php

class commission_member_full
{
	var $comm_debut;
	var $comm_fin;
	var $comm_pk;
	var $comm_user_pk;
	var $comm_com_pk;
	
    public function __construct($pk=null) 
  {
	if($pk!=null)
	{
		
		if(!isset($cm_array))
		{ $cm_array=null; }
	
		include '../DAL/commission_member_full_from_pk.php';
		
		$this->comm_debut=$cm_array[0]['comm_debut'];
		$this->comm_fin=$cm_array[0]['comm_fin'];
		$this->comm_pk=$cm_array[0]['comm_pk'];
		$this->comm_com_pk=$cm_array[0]['comm_com_pk'];
		$this->comm_user_pk=$cm_array[0]['comm_user_pk'];
		
	}
  

  }
  
  
}

?>