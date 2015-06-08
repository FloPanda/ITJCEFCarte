<?php	


include '..\Model\DataModel\event_full_DM.php';
include '..\Model\DataModel\commission_full_DM.php';
include '..\Model\DataModel\user_full_DM_pk.php';
include '..\Model\ViewModel\participant_list.php';

if(isset($_GET['event']))
{
	$event_concerned=new event_full($_GET['event']);
}
else
{
	$event_concerned=new event_full($_POST['ev_pk']);
}

$com_concerned=new commission_full($event_concerned->ev_com_linked);
$user_concerned=new user_full($event_concerned->ev_charged_member);

echo('

<img style="display:block; max-width:250px;height:auto;" src='.$event_concerned->ev_picture.' class="img-rounded">
<h4 class="modal-title">'.$event_concerned->ev_name.'</h4>
');

///////////////////////////////////////	
//Restriction affichage en fonction des droits
///////////////////////////////////////
if(isset($_SESSION['user_uuid']))
{
	if($_SESSION['user_is_admin']==1||$_SESSION['user_user_type']==1||$_SESSION['user_user_type']==2)
	{
		echo('
			<form action="./edit_event.php" method="POST">
				<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
				<input class="btn btn-primary" type="submit" name="submit" value="Editer">
			</form>
			
			<form action=".././Controller/delete_event.php" method="POST">
				<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
				<input class="btn btn-primary" type="submit" name="submit" value="Supprimer cet evenement">
			</form>
		');
}
	include '..\DAL\participe_ev_pk_user_uuid.php';
	
///////////////////////////////////////	
//présence à l'event (similation scan qr code)
///////////////////////////////////////

if(isset($part_array[0]['part_ev_pk'])&&$part_array[0]['part_present']==1)
	{
	}
	else
	{
		echo ('
		<form action=".././Controller/attend_event.php" method="POST">');
		
		//si l'utilisateur est dejà dans la base. Sert à éviter de le réajouter.
		if(isset($part_array[0]['part_ev_pk']))
		{ echo('
			<input type="hidden" name="exist" value="1"> ');
		}else
		{ echo('
			<input type="hidden" name="exist" value="0"> ');
		}
		echo('	
			
			
				<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
				<input type="hidden" name="user_uuid" value="'.$_SESSION['user_uuid'].'">
				<input class="btn btn-primary" type="submit" name="submit" value="Présent à cet evenement">
		</form>
	');
	}
	
///////////////////////////////////////	
// inscription à l'évènement
///////////////////////////////////////

	if(isset($part_array[0]['part_ev_pk'])&&$part_array[0]['part_subscribed']==1)
	{
		echo('
		<form action=".././Controller/unsuscribe_event.php" method="POST">
			<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
			<input type="hidden" name="user_uuid" value="'.$_SESSION['user_uuid'].'">
			<input class="btn btn-primary" type="submit" name="submit" value="Je ne participe plus à cet evenement">
		</form>
		');
	}
	else
	{
		echo ('
		<form action=".././Controller/subscribe_event.php" method="POST">');
		
		//si l'utilisateur est dejà dans la base. Sert à éviter de le réajouter.
		if(isset($part_array[0]['part_ev_pk']))
		{ echo('
			<input type="hidden" name="exist" value="1"> ');
		}else
		{ echo('
			<input type="hidden" name="exist" value="0"> ');
		}
		echo('	
			<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
			<input type="hidden" name="user_uuid" value="'.$_SESSION['user_uuid'].'">
			<input class="btn btn-primary" type="submit" name="submit" value="Je participe à cet evenement">
		</form>
	');
	}
}

///////////////////////////////////////	
// Affichage des données event
///////////////////////////////////////

echo('
</div>
<div class="modal-body">
	
	<p>Lieu : '.$event_concerned->ev_address.'</p>
	<p>Date : '.$event_concerned->ev_date.'</p>
	<p>Description : '.$event_concerned->ev_description.'</p>
	<p>Participants Max : '.$event_concerned->ev_max_participants.'</p>
	<p>Participants : '.$event_concerned->ev_participants.'</p>
	<p>Prix : '.$event_concerned->ev_price.'</p>
	<p>Nombre d\'inscrits : '.$event_concerned->ev_nb_subscribed.'</p>
	<p>Responsable : '.$user_concerned->user_name." ".$user_concerned->user_surname.'</p>
	<p>Lien avec la commission : '.$com_concerned->com_name.'</p>
	
	<p>----------------------------------<p>
	Liste des participants:</br>
	<font color="green"> S\'est inscrit - Fut présent </font></br>
	<font color="orange"> Non inscrit - Fut présent </font></br>
	<font color="red"> S\'est inscrit - Non présent </font></br>
	</br>
	
	');
	
	$test=new participant_list($event_concerned->ev_pk);
	if($test->participant_list!=null)
	{
	
		foreach($test->participant_list as $value)
		{	
			 $user_concerned=new user_full($value->part_user_pk);
			 if($value->part_subscribed==1&&$value->part_present==1){ echo ('<p> - <font color="green">'); }
			 if($value->part_subscribed==1&&$value->part_present==0){ echo ('<p> - <font color="orange">'); }
			 if($value->part_subscribed==0&&$value->part_present==0){ echo ('<p> - <font color="red">'); }
			 if($value->part_subscribed!=0||$value->part_present!=0){ echo ($user_concerned->user_name.' '.$user_concerned->user_surname.' </br></font></p>');}				
		}
	
	}
	else
	{ echo 'Pas encore de membre inscrit.</br>'; }
	
	
?>
</div></br>