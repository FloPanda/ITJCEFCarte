<!DOCTYPE html>
<html>

<?php
	include '..\Controller\event_profil.php';
	include 'header.php';
	include 'head.html';
	include 'dashboard.html';
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width="100%">
					<td>
					<h1 style="text-align:center">

					<?php 

					?>
					</h1>

					<br/>


					<?php 

					
						



echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                
						                <img style="display:block; width:150px;height:150px;" src='.$event_concerned->ev_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$event_concerned->ev_picture.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            <form method="POST" action="../Controller/test.php"> 
						                

						            	<p>Photo : <input type="file" name="ev_picture" value="'.$event_concerned->ev_picture.'"</p>
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

					
					</td>
		</table>
    </br></br>
    </div>
</br></br>


</section>
<!-- /end section content-->
	
</body>

<?php
		include 'footer.html';
?>
</html>