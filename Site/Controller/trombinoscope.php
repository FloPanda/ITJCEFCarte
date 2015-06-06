<!--<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>-->
	<?php	
		require( '../Model/ViewModel/user_list_trombinoscope.php');

		
					$count=0;
					$test=new user_list_trombinoscope();
					echo "<table id='table_trombi'>";					
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
						                <form action="../View/user_profil.php" method="POST">
						                	<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Voir Profil">
										    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
										</form>
										<!--<form action="../View/user_profil.php" method="GET">
											<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'">
										    <input class="btn btn-primary" type="submit" name="submitt" value="Voir GET">
										    
										</form>--!>
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
					
