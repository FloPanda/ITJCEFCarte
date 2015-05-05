<?php	


include '..\Model\DataModel\user_full_DM.php';


$user_concerned=new user_full($_POST['user_uuid']);

echo('
					</h1>

					<br/>


					<?php 
');

					
						$titlecontent=$user_concerned->user_surname." ".$user_concerned->user_name;
						$qrcode=$user_concerned->user_qr_code_url;



echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$titlecontent.'</h4> 

						                <form action="./edit_user.php" method="POST">
						                	<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
										</form>




						               
						            </div>
						            <div class="modal-body"> 
						                <p>Fonction : '.$user_concerned->user_jcef_function.'</p>
						                <p>Pays : '.$user_concerned->user_nation.'</p>
						                <p>Entreprise : '.$user_concerned->user_company.'</p>
						                <p>Inscription : '.$user_concerned->user_subscription_date.'</p>
						                <p>Email JCEF : '.$user_concerned->user_email_jcef.'</p>
						                <p>Naissance : '.$user_concerned->user_birth.'</p>
						                <p>Sexe : '.$user_concerned->user_sex.'</p>
						                <p>QR Code : '.$user_concerned->user_qr_code_url.'
						                <img src="https://chart.googleapis.com/chart?cht=qr&chl='.$user_concerned->user_qr_code_url.'&chs=100x100&choe=UTF-8&chld=L|2" alt="">
						                </p>
						                <p>Skype : '.$user_concerned->user_skype.'</p>
						                <p>WeChat : '.$user_concerned->user_weixin.'</p>

						                						       
						            </div>
						            <div class="modal-footer">
						                
									</div>
						        </div>
						    </div>
						</div>
						');


/*echo $user_concerned->user_name;
echo $user_concerned->user_surname;
echo $user_concerned->user_is_admin;
echo $user_concerned->user_birth;
echo $user_concerned->user_sex;
echo $user_concerned->user_nation;
echo $user_concerned->user_user_type;
echo $user_concerned->user_member_type;
echo $user_concerned->user_jcef_function;
echo $user_concerned->user_status;
echo $user_concerned->user_company;
echo $user_concerned->user_company_title;
echo $user_concerned->user_cell_phone;
echo $user_concerned->user_land_phone;
echo $user_concerned->user_subscription_date;
echo $user_concerned->user_renew_date;
echo $user_concerned->user_last_amount;
echo $user_concerned->user_picture;
echo $user_concerned->user_uuid;
echo $user_concerned->user_password;
echo $user_concerned->user_email_jcef;
echo $user_concerned->user_email_company;
echo $user_concerned->user_email_perso;
echo $user_concerned->user_weixin;
echo $user_concerned->user_skype;
echo $user_concerned->user_qr_code_url;
echo $user_concerned->user_address;
echo $user_concerned->user_comment;*/

//$_SESSION['user_concerned'] = $user_concerned;
//header('Location: ..\View\user_profil.php' ) ;

?>