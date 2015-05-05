<!DOCTYPE html>
<html>

<?php
	include '..\Controller\user_profil.php';
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

					
						$titlecontent=$user_concerned->user_surname." ".$user_concerned->user_name;
						$qrcode=$user_concerned->user_qr_code_url;



echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						            <form method="POST" action="../Controller/test.php">    
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">


						                <h4 class="modal-title">'.$titlecontent.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            	<input type="hidden" name="user_uuid" value="'.$user_concerned->user_uuid.'">
						             	<p>Photo : <input type="file" name="user_picture" value="'.$user_concerned->user_picture.'"</p>
						                <p>Fonction : <input type="text" name="user_jcef_function" value="'.$user_concerned->user_jcef_function.'"</p>
						                <p>Pays : <input type="text" name="user_nation" value="'.$user_concerned->user_nation.'"</p>
						                <p>Entreprise : <input type="text" name="user_company" value="'.$user_concerned->user_company.'"</p>
						                <p>Inscription : <input type="date" name="user_subscription_date" value="'.$user_concerned->user_subscription_date.'"</p>
						                <p>Email JCEF : <input type="text" name="user_email_jcef" value="'.$user_concerned->user_email_jcef.'"</p>
						                <p>Naissance : <input type="date" name="user_birth" value="'.$user_concerned->user_birth.'"</p>
						                <p>Sexe : <input type="text" name="user_sex" value="'.$user_concerned->user_sex.'"</p>
						                commissions
						       
					
						                <p>Skype : <input type="text" name="user_skype" value="'.$user_concerned->user_skype.'"</p>
						                <p>WeChat : <input type="text" name="user_weixin" value="'.$user_concerned->user_weixin.'"</p>

						                						       
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