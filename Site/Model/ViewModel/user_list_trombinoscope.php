<?php 

class user_list_trombinoscope implements JsonSerializable
{
	
  public $user_list;

  public function __construct() 
  {
	$count=0;
	$this->user_list=array();
	$user_array=null;

	include 'user_trombinoscope.php';
	include '../DAL/user_full.php';
	
	foreach($user_array as $value)
	{
		
		array_push($this->user_list, new user_trombinoscope($value));
		$count++;

	}
  
  
  }


	public function jsonSerialize() {
        return ['user_list' => $this->user_list];
    }




  
}

?>