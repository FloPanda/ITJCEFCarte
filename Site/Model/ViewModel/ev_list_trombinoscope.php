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

class ev_list_trombinoscope implements JsonSerializable
{	
  public $ev_list;

  public function __construct() 
  {
	$count=0;
	$this->ev_list=array();
	$event_array=null;

	include_once 'ev_trombinoscope.php';
	include '../DAL/event_full.php';
	
	foreach($event_array as $value)
	{
		foreach ($value as $val) {
            $val=utf8_encode($val);
        }
		array_push($this->ev_list, new ev_trombinoscope($value));
		$count++;
	}  
  }


  public function jsonSerialize() {
        $res = array('ev_list' => $this->ev_list);
        return $res;
    }
  
}

?>