<SELECT name="user_list" size="3">

<?php

require( '../Model/ViewModel/user_list_trombinoscope.php');
$liste=new user_list_trombinoscope();

foreach($liste->user_list as $value)
{
	if(isset($user_concerned)&&$user_concerned->user_uuid==$value->user_uuid)
	{
		echo "<OPTION  SELECTED VALUE=".$value->user_uuid.">".$value->user_surname.' '.$value->user_name;
	}
	else
	{
		echo "<OPTION VALUE=".$value->user_uuid.">".$value->user_surname.' '.$value->user_name;
	}
	
}
?>

</SELECT>