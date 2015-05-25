<?php 

class participant_list
{
	
  var $participant_list;

  public function __construct($pk) 
  {
	$count=0;
	$this->participant_list=array();
	$part_array=null;

	include 'participant_listing.php';
	include '../DAL/participant_full_from_event_pk.php';
	
	if($part_array!=null)
	{
		foreach($part_array as $value)
		{
			
			array_push($this->participant_list, new participant_listing($value));
			$count++;

		}
	}
  
  
  }
  
}

?>