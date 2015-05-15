<SELECT name="user_list" size="3">

<?php

require( '../Model/ViewModel/user_list_trombinoscope.php');
$liste=new user_list_trombinoscope();

foreach($liste->user_list as $value)
{
	echo "<OPTION VALUE=".$value->user_uuid.">".$value->user_surname.' '.$value->user_name;
	
}
?>

</SELECT>