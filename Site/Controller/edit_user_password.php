<?php 
// classe user
include '..\Model\DataModel\user_full_DM.php';

					
$titlecontent=" Modification du mot de passe";
echo '<h4 class="modal-title">'.$titlecontent.'</h4> ';
?>
									<script  type="text/javascript">
										
										var fieldalias="mot de passe"

										function verify(element1, element2)
										 {
										  var passed=false

										   if (element1.value=='')
										   {
											alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!")
											element1.focus()
										   }
										   else if (element2.value=='')
										   {
											alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!")
											element2.focus()
										   }

										   else if (element1.value!=element2.value)
										   {
											alert("Les deux "+fieldalias+" ne condordent pas")
											element1.select()
										   }

										   else
										   passed=true
										   return passed
										 }
										
										</script>
									
						            <form onsubmit="return verify(this.user_password, this.user_password_confirm)"  method="POST" action="../Controller/user_update_password.php">    
						            </div>
						            <div class="modal-body">
									
						            	<?php echo('<input type="hidden" name="user_uuid" value="'.$_POST['user_uuid'].'">') ;?>
										
										<p>Nouveau mot de passe : <input type="text" name="user_password"></p>
										<p>Confirmer : <input type="text" name="user_password_confirm"></p></br>
										<input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
										
										
															
									</p>
									</div>
									</form>
