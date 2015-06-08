<SELECT name="com_list" size="3">

<?php

require( '../Model/ViewModel/com_list_trombinoscope.php');
$liste=new com_list_trombinoscope();
$count=0;

foreach($liste->com_list as $value)
{
	if((isset($com_concerned)&&$com_concerned->com_pk==$value->com_pk)||($count==0&&isset($is_add)))
	{
		echo "<OPTION  SELECTED VALUE=".$value->com_pk.">".$value->com_name;
	}
	else if(isset($cm_array)&&$cm_array[0]['comm_com_pk']==$value->com_pk)
	{
		echo "<OPTION  SELECTED VALUE=".$value->com_pk.">".$value->com_name;
	}
	else
	{
		echo "<OPTION VALUE=".$value->com_pk.">".$value->com_name;
	}
	
	$count++;
}
?>

</SELECT>