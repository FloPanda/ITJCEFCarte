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

class com_list_trombinoscope implements JsonSerializable
{	
  public $com_list;

  public function __construct() 
  {
	$count=0;
	$this->com_list=array();
	$com_array=null;

	include_once 'com_trombinoscope.php';
	include '../DAL/commission_full.php';
	
	foreach($com_array as $value)
	{
		foreach ($value as $val) {
            $val=utf8_encode($val);
        }
		array_push($this->com_list, new com_trombinoscope($value));
		$count++;
	}  
  }


  public function jsonSerialize() {
        $res = array('com_list' => $this->com_list);
        return $res;
    }
  
}

?>