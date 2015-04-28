<?php	

include '..\Model\DataModel\event_full_DM.php';

//$event_concerned=new event_full($_POST['ev_pk']);
$event_concerned=new event_full(1);//a virer et remettre la ligne du haut quand le post arrivera, la  c est du test


echo $event_concerned->ev_pk;
echo $event_concerned->ev_name;
echo $event_concerned->ev_address;
echo $event_concerned->ev_date;
echo $event_concerned->ev_description;
echo $event_concerned->ev_picture;
echo $event_concerned->ev_max_participants;
echo $event_concerned->ev_participants;
echo $event_concerned->ev_price;
echo $event_concerned->ev_nb_subscribed;
//echo $event_concerned->ev_charged_member;
//echo $event_concerned->ev_com_linked;




?>