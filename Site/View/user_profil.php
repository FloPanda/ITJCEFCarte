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
						                
						                <img style="display:block; width:150px;height:150px;" src='.$user_concerned->user_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$titlecontent.'</h4>
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
						                <a rel="nofollow" href="http://www.qrcode-generator.de" border="0" style="cursor:default"><img src="https://chart.googleapis.com/chart?cht=qr&chl='.$user_concerned->user_qr_code_url.'&chs=100x100&choe=UTF-8&chld=L|2" alt=""></a>
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