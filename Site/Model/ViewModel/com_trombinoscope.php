<?php




class com_trombinoscope
{
		
	var $com_pk;
	var $com_name;
	var $com_description;
	var $com_picture;
	var $com_is_open;

  public function __construct(array $value) 
  {
	
	$this->com_pk=$value['com_pk'];
	$this->com_name=$value['com_name'];
	$this->com_description=$value['com_description'];
	$this->com_picture=$value['com_picture'];
	$this->com_is_open=$value['com_is_open'];
  }
  
}

?>