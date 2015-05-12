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
						                <img style="display:block; width:250px;height:150px;" src='.$event_concerned->ev_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$event_concerned->ev_name.'</h4>
						                <form action="./edit_event.php" method="POST">
						                	<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
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
						            	<p>Responsable : '.$event_concerned->ev_charged_member.'</p>
						            	<p>Lien avec la commission : '.$event_concerned->ev_com_linked.'</p>
						                						       
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