<?php	

include '../Model/ViewModel/user_list_full.php';
$user_list=new user_list_full();
$user_count=0;

$male_count=0;
$female_count=0;
$other_sex_account=0;

$member_count=0;
$pengyou_count=0;
$former_count=0;
$other_member_type_account=0;

foreach($user_list->user_list as $value)
{	
	$user_count++;

	//sexe
	if($value->user_sex=="m")
	{
		$male_count++;
	}
	else if($value->user_sex=="f")
	{
		$female_count++;
	}
	else
	{
		$other_sex_account++;
	}
	
	//member type
	if($value->user_member_type==1)
	{
		$member_count++;
	}
	else if($value->user_member_type==2)
	{
		$pengyou_count++;
	}
	else if($value->user_member_type==3)
	{
		$former_count++;
	}
	else 
	{
		$other_member_type_account++;
	}

}



include '../Model/ViewModel/ev_list_full.php';
$event_list=new ev_list_full();
$event_count=0;
$ev_nb_subscribed=0;
$ev_participants=0;
$ev_price=0;

foreach($event_list->ev_list as $value)
{	
	$event_count++;
	$ev_nb_subscribed+=$value->ev_nb_subscribed;
	$ev_participants+=$value->ev_participants;
	$ev_price+=$value->ev_price;
}




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
<h1>Statistiques membres:</h1></br></br>

'.$user_count.' membres </br>
	dont: </br>- '.$male_count.' hommes ( soit  '.round(((100/$user_count)*$male_count),2).'% )</br>
		  - '.$female_count.' femmes ( soit  '.round(((100/$user_count)*$female_count),2).'% )</br>
		  - '.$other_sex_account.' autres ( soit  '.round(((100/$user_count)*$other_sex_account),2).'% )</br>
		  
</br>
</br>

Types de membres:</br>
		  - '.$member_count.' membres ( soit  '.round(((100/$user_count)*$member_count),2).'% )</br>
		  - '.$pengyou_count.' pengyous ( soit  '.round(((100/$user_count)*$pengyou_count),2).'% )</br>
		  - '.$former_count.' anciens membres ( soit  '.round(((100/$user_count)*$former_count),2).'% )</br>
		  - '.$other_member_type_account.' autres ( soit '.round(((100/$user_count)*$other_member_type_account),2).'% )</br>


<h1>Statistiques Evenements:</h1></br></br>
Nombre d\'évènements: '.$event_count.'</br>
		  - Prix moyen: '.$ev_price/$event_count.' RMB </br>
		  - Nombre moyen de participants: '.round($ev_participants/$event_count).' personnes </br>
		  - Nombre moyen d\'inscrits: '.round($ev_nb_subscribed/$event_count).' personnes </br>
		  </br>
Ce qui signifie que '.(100/$ev_participants)*$ev_nb_subscribed.' % des personnes présentes aux évènements s\'inscrivent avant.



<h1>Statistiques Commissions:</h1></br></br>
Nombre de commissions: '.$com_count.'</br>
		  - Dont fermées: '.$com_fermees.'</br>

');
?>