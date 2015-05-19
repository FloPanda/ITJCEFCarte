<?php	


include '..\Model\DataModel\event_full_DM.php';
include '..\Model\DataModel\commission_full_DM.php';
include '..\Model\DataModel\user_full_DM_pk.php';

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

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <img style="display:block; width:250px;height:150px;" src='.$event_concerned->ev_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$event_concerned->ev_name.'</h4>
						                <form action="./edit_event.php" method="POST">
						                	<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
										</form>
										<form action=".././Controller/delete_event.php" method="POST">
						                	<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Supprimer cet evenement">
										</form>
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

						                						       
						            </div>
						            <div class="modal-footer">
						                
									</div>
						        </div>
						    </div>
						</div>
						');
?>