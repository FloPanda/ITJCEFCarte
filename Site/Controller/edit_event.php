<?php 

include '..\Model\DataModel\event_full_DM.php';
include '..\Model\DataModel\commission_full_DM.php';
include '..\Model\DataModel\user_full_DM_pk.php';

$event_concerned=new event_full($_POST['ev_pk']);
$com_concerned=new commission_full($event_concerned->ev_com_linked);
$user_concerned=new user_full($event_concerned->ev_charged_member);
					
$titlecontent=$event_concerned->ev_name;

/*

IL EST IMPOSSIBLE DE CHARGER UN TYPE FILE PAR DEFAUT. DONC ON LE LAISSE EN TEXT ET ON LE CHANGE PLUS TARD. MERCI D AVANCE :) 

*/

echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						               <form method="POST" action="../Controller/event_update.php"> 
						                <img style="display:block; width:250px;height:150px;" src='.$event_concerned->ev_picture.' class="img-rounded">
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
						            	
										<p>Responsable : ');  include  '..\Controller\user_list.php' ; echo('</p>
										<p>Lien avec la commission : ');  include  '..\Controller\com_list.php' ; echo('</p>
										
										

						                						       
						            </div>
						            <div class="modal-footer">
						                
									</div>
						        </div>
						    </div>
						</div>
						');

						/* <p>Responsable : <input type="text" name="ev_charged_member" value="'.$user_concerned->user_name." ".$user_concerned->user_surname.'"</p>
						            	<p>Lien avec la commission : <input type="text" name="ev_com_linked" value="'.$com_concerned->com_name.'"</p>
									*/
						?>
