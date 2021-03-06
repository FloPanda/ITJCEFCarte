<?php 
    function utf8_encode_deep($input) {
        if (is_string($input)) {
            $input = utf8_encode($input);
        } else if (is_array($input)) {
            foreach ($input as &$value) {
                utf8_encode_deep($value);
            }

            unset($value);
        } else if (is_object($input)) {
            $vars = array_keys(get_object_vars($input));

            foreach ($vars as $var) {
                utf8_encode_deep($input->$var);
            }
        }
    }

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
        foreach ($value as $val) {
            $val=utf8_encode($val);
        }
		array_push($this->user_list, new user_trombinoscope($value));
		$count++;
	}
  }
    
	public function jsonSerialize() {
        $res = array('user_list' => $this->user_list);
        return $res;
    }
}
?>