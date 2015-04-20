<!DOCTYPE html>
<html>
	<?php	
		require( '../Model/ViewModel/user_list_trombinoscope.php');
		include '../View/header.php';
		include '../View/head.html';
		include '../View/dashboard.html';
		require ('../DAL/sql_connect.php');
	?>
	<body>
		<section class="section-content">
    		<div class="content">
				<div class="container-fluid">
				<h1 class="modal-title" align=center>Trombinoscope</h1>
					<div class="row">		
					<?php 
					$test=new user_list_trombinoscope();					
					foreach($test->user_list as $value)
					{	
						$titlecontent=($value->user_surname.' '.$value->user_name);
						echo ('
						<div id="myModal" class="modal fade">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <img style="display:block; width:100px;height:100px;" src='.$value->user_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$titlecontent.'</h4>
						            </div>
						            <div class="modal-body">
						                <p>Fonction : '.$value->user_jcef_function.'</p>
						                <p>Pays : '.$value->user_nation.'</p>
						                <p>Entreprise : '.$value->user_company.'</p>
						                <p>Inscription : '.$value->user_subscription_date.'</p>
						                <p>Email JCEF : '.$value->user_email_jcef.'</p>
						                <p>QRcode : '.$value->user_jcef_function.'</p>						       
						            </div>
						            <div class="modal-footer">
						                <form action="http://google.com">
										    <input class="btn btn-primary" type="submit" value="Voir Profil">
										    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
										</form>
									</div>
						        </div>
						    </div>
						</div>
						');					
						echo "<div class='col-md-4'>";
						echo '<div type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">';
						echo "<center><img style='display:block; width:80px;height:80px;' src=".$value->user_picture." class='img-circle'>";											
						echo '<h5 class="modal-title">'.$value->user_surname." ";
						echo $value->user_name."<br></h5>";
						echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
						echo "</center></div></div>";												
					}
					?>
				</div>
			</div>
	    </div>
	</section>
	<!-- /end section content-->	
	</body>
	<?php
		include '../View/footer.html';
	 ?>

</html>