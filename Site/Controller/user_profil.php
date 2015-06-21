<?php	


include '..\Model\DataModel\user_full_DM.php';

if(isset($_POST['user_uuid']))
{
	$user_concerned=new user_full($_POST['user_uuid']);
}
else if(isset($_GET['user']))
{
	$user_concerned=new user_full($_GET['user']);
}

echo('
					</h1>

					<br/>


					<?php 
');

					
						$titlecontent=$user_concerned->user_surname." ".$user_concerned->user_name;
						$qrcode=$user_concerned->user_qr_code_url;



echo('
						                
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$titlecontent.'</h4> ');
										
										if(isset($_SESSION['user_uuid'])&&($_SESSION['user_uuid']==$user_concerned->user_uuid||$_SESSION['user_is_admin']==1))
										{
											echo(
											'<form action="../View/edit_user.php" method="POST">
													<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'"> 
													<input class="btn btn-primary" type="submit" name="submit" value="Editer">
												</form>
											<form action="../View/edit_user_password.php" method="POST">
													<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'"> 
													<input class="btn btn-primary" type="submit" name="submit" value="Changer le mot de passe">
												</form>
											<form action="../View/user_new_image.php" method="POST">
													<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'"> 
													<input class="btn btn-primary" type="submit" name="submit" value="Changer la photo de l\'utilisateur">
												</form>'
												
												
												);
												if($_SESSION['user_is_admin']==1)
												{ 
												echo('
											<form action=".././Controller/delete_user.php" method="POST">
												<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'"> 
												<input class="btn btn-primary" type="submit" name="submit" value="Supprimer cet utilisateur">
											</form>')
												;}
										}

									echo('

						               
						            </div>
						            <div class="modal-body"> 
						                <p>Fonction : '.$user_concerned->user_jcef_function.'</p>
						                <p>Pays : '.$user_concerned->user_nation.'</p>
						                <p>Entreprise : '.$user_concerned->user_company.'</p>
						                <p>Inscription : '.$user_concerned->user_subscription_date.'</p>
						                <p>Email JCEF : '.$user_concerned->user_email_jcef.'</p>
						                <p>Naissance : '.$user_concerned->user_birth.'</p>
						                <p>Sexe : '.$user_concerned->user_sex.'</p>
						                <p>QR Code : 
						                <a href="../View/trombinoscope.php"><img src="https://chart.googleapis.com/chart?cht=qr&chl='.$user_concerned->user_qr_code_url.'&chs=100x100&choe=UTF-8&chld=L|2" alt=""></a>
						                </p>
						                <p>Skype : '.$user_concerned->user_skype.'</p>
						                <p>WeChat : '.$user_concerned->user_weixin.'</p>
										<p>UUID : '.$user_concerned->user_uuid.'</p>
						                						       
						            </div>
						                
						');



//header('Location: ..\View\user_profil.php' ) ;

?>