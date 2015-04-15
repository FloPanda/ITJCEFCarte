<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.html';
	
	$T1='JCEF Add User';
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
					<h1 style="text-align:center">
						<span style="background:gainsboro;padding:4px">
							<?php 
								echo"$T1 ";
							?>
						</span>
					</h1>

					<br/>


					<?php 
						
					?>

					
					
						<title>Ajouter un Utilisateur</title>
					
			
					
					
						<form action="../Controller/add_user.php" method="POST">
							<table>
								<tr>
									<td>	
										Nom : 	
									</td>
									<td>
										<input type="text" name="user_name" >
									</td>
								</tr>
								<tr>
									<td>
										Prénom : 		
									</td>
									<td>
										<input type="text" name="user_surname" >
									<td>
								</tr>
								<tr>
									<td>
										Date de naissance :
									</td>
									<td>
										<input type="date" name="user_birth" >
									</td>
								</tr>
								<tr>
									<td>
										Sexe :
									</td>
									<td> 
										<input type="radio" name="user_sex" value="male"> homme<br>
										<input type="radio" name="user_sex" value "female"> femme
									</td>
								</tr>
								<tr>
									<td>	
										Nationalité : 
									</td>
									<td>
										<input type="text" name="user_nation" >
									</td>
								</tr>
								<tr>
									<td>
										Type d'adhésion : 
									</td>
									<td>
										<input type="radio" name="user_member_type" value="2"> Membre<br>
										<input type="radio" name="user_member_type" value "1"> Pengyou
									</td>
								</tr>
								<tr>
								</tr>
								<tr>
									<td>
										Entreprise : 
									</td>
									<td>
										<input type="text" name="user_company" >
									</td>
								<tr>										
									<td>
										Emploi :
									</td>
									<td>
										<input type="text" name="user_company_title">
									</td>
								</tr>
								<tr>
									<td>
										Mobile :
									</td>
									<td> 
										<input type="text" name="user_cell_phone" >
									</td>
								</tr>
								<tr>
									<td>
										Fixe : 
									</td>
									<td>
										<input type="text" name="user_land_phone" >					
									</td>
								</tr>
								<tr>
									<td>
										Photo :
									</td>
									<td>
										<input type="text" name="user_picture">
									</td>
								</tr>
								<!--<tr>
									<td>
										Email JCEF :
									</td> 
									<td>
										<input type="text" name="uemailjcef">
									</td>
								</tr>-->
								<tr>
									<td>
										Email Entreprise :
									</td> 
									<td>
										<input type="text" name="user_email_company">
									</td>
								</tr>
								<tr>
									<td>
										Email Personnel :
									</td> 
									<td>
										<input type="text" name="user_email_perso" >
									</td>
								</tr>
								<tr>
									<td>
										Weixin :
									</td> 
									<td>
										<input type="text" name="user_weixin">
									</td>
								</tr>
								<tr>	
									<td>
										Skype :
									</td> 
									<td>
										<input type="text" name="user_skype">
									</td>
								</tr>
								<tr>
									<td>
										QR code :
									</td>
									<td>
										<input type="text" name="user_qr_code_url">
									</td>
								</tr>
								<tr>
									<td>
										Adresse : 
									</td>
									<td>
										<input type="text" name="user_address" >
									</td>	
								</tr>
								<tr>
									<td>
										Commentaire : 
									</td>
									<td>
										<input type="text" name="user_comment">
									</td>	
								</tr>
								<tr>
									<td>
											<input type="submit" value="Valider" name="submit">
									</td>
								</tr>
						</table>
					</form>	
						
				
			</td>
		</table>
    </div>


</section>
<!-- /end section content-->
	
</body>

<?php
		include 'footer.html';
?>
</html>