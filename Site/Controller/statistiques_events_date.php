<?php	

include '../Model/ViewModel/ev_list_full.php';
include '../Model/DataModel/user_full_DM_pk.php';
include '../Model/DataModel/commission_full_DM.php';

$event_list=new ev_list_full();
$event_array_list= array();
$event_count=0;
$ev_nb_subscribed=0;
$ev_participants=0;
$ev_price=0;

foreach($event_list->ev_list as $value)
{	
	if(($_POST['event_date_1']<=$value->ev_date)&&($value->ev_date<=$_POST['event_date_2']))
	{
		$event_count++;
		
		$ev_nb_subscribed+=$value->ev_nb_subscribed;
		$ev_participants+=$value->ev_participants;
		$ev_price+=$value->ev_price;
		
		array_push($event_array_list,$value);
	}

}

echo('
<h1>Statistiques Evenements:</h1></br></br>
Du '.$_POST['event_date_1'].' au '.$_POST['event_date_2'].' :</br></br>

Nombre d\'évènements: '.$event_count.'</br>');
if($event_count!=0)
{
	echo('
		  - Prix moyen: '.$ev_price/$event_count.' RMB </br>
		  - Nombre moyen de participants: '.round($ev_participants/$event_count).' personnes </br>
		  - Nombre moyen d\'inscrits: '.round($ev_nb_subscribed/$event_count).' personnes </br>
		
	Ce qui signifie que '.(100/$ev_participants)*$ev_nb_subscribed.' % des personnes présentes aux évènements s\'inscrivent avant.</br></br>

	- '.$event_count.' évènements prenant place:</br></br>');
	if(isset($event_array_list[0]))
	{
		foreach($event_array_list as $value2)
		{	
			$this_user=new user_full($value2->ev_charged_member);
			$this_com=new commission_full($value2->ev_com_linked);
			echo('<a href=../View/event_profil.php?event='.$value2->ev_pk.'>'.$value2->ev_name.'</a></br>- le '.$value2->ev_date.' créé par <a href=../View/user_profil.php?user='.$this_user->user_uuid.'> '.$this_user->user_name.' '.$this_user->user_surname.'</a>, lié à la commission <a href=../View/com_profil.php?com='.$this_com->com_pk.'> '.$this_com->com_name.'</a></br>
			Prix: '.$value2->ev_price.', Participants: '.$value2->ev_participants.', Inscrits: '.$value2->ev_nb_subscribed.', Nombre maximum d\'inscrits: '.$value2->ev_max_participants.' </br></br>');
		}

	}

}

?>