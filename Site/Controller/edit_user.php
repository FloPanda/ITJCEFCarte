<?php 

include '..\Model\DataModel\user_full_DM.php';


$user_concerned=new user_full($_POST['user_uuid']);
					
$titlecontent=$user_concerned->user_surname." ".$user_concerned->user_name;
$qrcode=$user_concerned->user_qr_code_url;


//affichage pré-rempli des informations à modifier
echo('
						            <form method="POST" action="../Controller/user_update.php">    
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">


						                <h4 class="modal-title">'.$titlecontent.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            	<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'">
										<p>Photo : <input type="text" name="user_picture" value="'.$user_concerned->user_picture.'"</p>
						                <p>Fonction : <input type="text" name="user_jcef_function" value="'.$user_concerned->user_jcef_function.'"</p>
						                <p>Pays : <input type="text" name="user_nation" value="'.$user_concerned->user_nation.'"</p>
						                <p>Entreprise : <input type="text" name="user_company" value="'.$user_concerned->user_company.'"</p>
						                <p>Inscription : <input type="date" name="user_subscription_date" value="'.$user_concerned->user_subscription_date.'"</p>
						                <p>Email JCEF : <input type="text" name="user_email_jcef" value="'.$user_concerned->user_email_jcef.'"</p>
						                <p>Naissance : <input type="date" name="user_birth" value="'.$user_concerned->user_birth.'"</p>
						                <p>Sexe : <input type="text" name="user_sex" value="'.$user_concerned->user_sex.'"</p>
						                <p>Skype : <input type="text" name="user_skype" value="'.$user_concerned->user_skype.'"</p>
						                <p>WeChat : <input type="text" name="user_weixin" value="'.$user_concerned->user_weixin.'"</p>
										<p> Type adhésion:
							<form method="POST" name="user_member_type">
							<input type="radio" name="1"'); if($user_concerned->user_member_type==1){echo('checked="checked"');} echo(' value="1"> Membre <br>
							<input type="radio" name="2"'); if($user_concerned->user_member_type==2){echo('checked="checked"');} echo(' value="2"> Pengyou <br>
							<input type="radio" name="3"'); if($user_concerned->user_member_type==3){echo('checked="checked"');} echo(' value="3"> Ancien
							</form> 	</p>
										
										<input type="hidden" name="user_pk" value="'.$user_concerned->user_pk.'">
										');
										
										include  '..\DAL\commission_member_from_user_pk.php' ;
										
										// gestion des droits
										if(isset($_SESSION['user_is_admin'])&&$_SESSION['user_is_admin']==1) //TODO||(isset($_SESSION['user_type'])&&$_SESSION['user_type']==1)
										{
											echo('
											<p>Lien avec la commission :'); 
											/* Chargement de la commission attachée à l'utilisateur dans la base et création d'une liste déroulante avec 
											la commission déjà selectionnée */
											
											include  '..\Controller\com_list.php' ;
											
											if (isset($cm_array[0]['comm_pk'])) 
											{ 
												// On garde l'ancienne commission pour gérer un probable update de celle ci à la prochaine page
												$previous_com=$cm_array[0]['comm_pk']; 
												echo('
												<input type="hidden" name="previous_com" value="'.$previous_com.'">
												');
											}								
											echo('</p>'); 
										}
?>