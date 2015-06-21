<?php	

include '../Model/ViewModel/com_list_trombinoscope.php';
$com_list=new com_list_trombinoscope();
$com_count=0;
$com_fermees=0;

foreach($com_list->com_list as $value)
{	
	$com_count++;
	if($value->com_is_open==0)
	{ $com_fermees++; }
}

echo('
<h1>Statistiques Commissions:</h1></br></br>
Nombre de commissions: '.$com_count.'</br>
		  - Dont fermées: '.$com_fermees.'</br>

');
?>