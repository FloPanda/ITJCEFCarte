<?php	

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

echo('
<h1>Statistiques Evenements:</h1></br></br>
Nombre d\'évènements: '.$event_count.'</br>
		  - Prix moyen: '.$ev_price/$event_count.' RMB </br>
		  - Nombre moyen de participants: '.round($ev_participants/$event_count).' personnes </br>
		  - Nombre moyen d\'inscrits: '.round($ev_nb_subscribed/$event_count).' personnes </br>
		  </br>
Ce qui signifie que '.(100/$ev_participants)*$ev_nb_subscribed.' % des personnes présentes aux évènements s\'inscrivent avant.

');
?>