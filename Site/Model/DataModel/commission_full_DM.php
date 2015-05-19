<?php

class commission_full
{
	var $com_pk;
	var $com_name;
	var $com_description;
	var $com_picture;

    public function __construct($pk=null) 
  {
	if($pk!=null)
	{
		
		if(!isset($com_array))
		{ $com_array=null; }
	
		include '../DAL/commission_full_from_pk.php';
		
		$this->com_pk=$com_array[0]['com_pk'];
		$this->com_name=$com_array[0]['com_name'];
		$this->com_description=$com_array[0]['com_description'];
		$this->com_picture=$com_array[0]['com_picture'];
		
	}
	else
	{
		$this->com_name="non specifie";
		$this->com_description="non specifie";
		$this->com_picture="../Ressources/Images/nopic.jpg";
	}
  

  }
  
  
}

?>