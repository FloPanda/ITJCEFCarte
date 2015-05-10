<?php 

include '..\Model\DataModel\event_full_DM.php';


$event_concerned=new event_full($_POST['ev_pk']);
					
$titlecontent=$event_concerned->ev_name;



echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						               <form method="POST" action="../Controller/event_update.php"> 
						                <img style="display:block; width:150px;height:150px;" src='.$event_concerned->ev_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$event_concerned->ev_picture.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            
						                
						            	<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'">
						            	<p>Photo : <input type="text" name="ev_picture" value="'.$event_concerned->ev_picture.'"</p>
						                <p>Lieu : <input type="text" name="ev_address" value="'.$event_concerned->ev_address.'"</p>
						            	<p>Date : <input type="text" name="ev_date" value="'.$event_concerned->ev_date.'"</p>
						            	<p>Description : <textarea name="ev_description">'.$event_concerned->ev_description.'</textarea></p>
						            	<p>Participants Max : <input type="text" name="ev_max_participants" value="'.$event_concerned->ev_max_participants.'"</p>
						            	<p>Participants : <input type="text" name="ev_participants" value="'.$event_concerned->ev_participants.'"</p>
						            	<p>Prix : <input type="text" name="ev_price" value="'.$event_concerned->ev_price.'"</p>
						            	<p>Nombre d\'inscrits : <input type="text" name="ev_nb_subscribed" value="'.$event_concerned->ev_nb_subscribed.'"</p>
						            	<p>Responsable : <input type="text" name="ev_charged_member" value="'.$event_concerned->ev_charged_member.'"</p>
						            	<p>Lien avec la comission : <input type="text" name="ev_com_linked" value="'.$event_concerned->ev_com_linked.'"</p>

						                						       
						            </div>
						            <div class="modal-footer">
						                
									</div>
						        </div>
						    </div>
						</div>
						');
?>