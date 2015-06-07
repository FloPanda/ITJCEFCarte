<?php 
// classe user
include '..\Model\DataModel\user_full_DM.php';


$user_concerned=new user_full($_POST['user_uuid']);
					
$titlecontent=$user_concerned->user_surname." ".$user_concerned->user_name;
$qrcode=$user_concerned->user_qr_code_url;


//affichage pré-rempli des informations à modifier
echo('
						            <form method="POST" action="../Controller/user_update_picture.php">    
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">


						                <h4 class="modal-title">'.$titlecontent.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            	<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'">
										<input type="hidden" name="user_pk" value="'.$user_concerned->user_pk.'">
										<p>Nouvelle Photo : <input type="file" name="user_picture" value="'.$user_concerned->user_picture.'"</p>
										
								
								
								</div>
								</form>
								');
?>