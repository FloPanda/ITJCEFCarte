<SELECT name="com_list" size="3">

<?php

require( '../Model/ViewModel/com_list_trombinoscope.php');
$liste=new com_list_trombinoscope();

foreach($liste->com_list as $value)
{
	echo "<OPTION VALUE=".$value->com_pk.">".$value->com_name;
	
}
?>

</SELECT>