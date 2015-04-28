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

    		<!-- content page -->
                <article class="content-page">
                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">

				<div class="container-fluid">
				<h1 class="modal-title" align=center>Trombinoscope</h1>
					<div class="row-fluid">
					<div class="span8">
							
					<?php 
					$count=0;
					$test=new user_list_trombinoscope();
					echo "<table>";					
					foreach($test->user_list as $value)
					{	
						if($count%6==0)
						{
							echo "<tr>";
						}
						$count++;
						$titlecontent=($value->user_surname.' '.$value->user_name);
						echo ('
						<div id="myModal'.$count.'" class="modal fade" style="display: none;>
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
						                						       
						            </div>
						            <div class="modal-footer">
						                <form action="./user_profil.php" method="POST">
						                	<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Voir Profil">
										    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
										</form>
									</div>
						        </div>
						    </div>
						</div>
						');					
						echo "<td><!--<div class='col-md-1'>-->";
						
						echo '<div style="height:150px;width:150px;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$count.'">';
						echo "<center><img style='display:block; width:80px;height:80px;' src=".$value->user_picture." class='img-circle'>";											
						echo '<h5 class="modal-title">'.$value->user_surname." ";
						echo $value->user_name."</h5>";
						echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
						echo "</center></div>";
						echo "<!--</div>--></td>";
						if($count%6==0)
						{
							echo "</tr>";
						}												
					}
					echo "</table>";
					?>
					</div>
				</div>
			</div>

			</div>
			</div>
			</article>



	    </div>
	</section>
	<!-- /end section content-->	
	</body>
	<?php
		include '../View/footer.html';
	 ?>

</html>