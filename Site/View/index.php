<!DOCTYPE html>
<html>

<?php

	$is_index=true;
	
	include 'header.php';
	include 'head.html';
	include 'dashboard.php';
	
?>

<body>
	<section class="section-content">
<<<<<<< Updated upstream
		<div class="content">

			<!-- content page -->
			<article class="content-page">
				<!-- main page, you're application here -->
				<div class="main-page">
					<div class="content-inner">

							<div class="container-fluid">
								<h1 style="text-align:center">
									Connexion
									</span>
								</h1>

								<br/>

								<center>
								
									<title>JCEF Login Page</title>
								
								
								
								
									<form action="../Controller/index.php" method="POST"> <!--controleur-->
										<table>
									<tr>
									 <!--controleur-->
										<td>Identifiant : </td><td><input type="text" name="user_uuid"></td></tr><tr>
										<td>Mot de Passe : </td><td><input type="password" name="user_password"></td></tr>
									</table>
									<input type="submit" value="login" name="submit">
									</form>	
									
								</center>
							</div>
						</div>
					</div>
			</article>
	    </div>
	</section>
	<!-- /end section content-->	
=======
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
					<h1 style="text-align:center">
						Connexion
						</span>
					</h1>

					<br/>


					
<<<<<<< Updated upstream
=======
<<<<<<< Updated upstream
					$link = mysqli_connect('localhost','root','',"jcef-bdd"); // DAL
					$sql=mysqli_query($link,"SELECT * FROM user");	// DAL
						while($row = mysqli_fetch_array($sql)) 
=======
					$link = mysqli_connect('localhost','jcef','jcef',"jcef-bdd"); 
					$sql=mysqli_query($link,"SELECT * FROM user");
						while($row = mysqli_fetch_array($sql))
>>>>>>> Stashed changes
						{
						// BUS
							print $row['user_name']." - ".$row['user_password']; // mettre le résultat dans un objet datamodel, renvoyer le joyeux bordel au controleur
						}
					?>
>>>>>>> Stashed changes
					

					<center>
					
						<title>JCEF Login Page</title>
					
					
					
					
<<<<<<< Updated upstream
						<form action="../Controller/index.php" method="POST"> <!--controleur-->
							<table>
						<tr>
						 <!--controleur-->
							<td>Identifiant : </td><td><input type="text" name="user_uuid"></td></tr><tr>
							<td>Mot de Passe : </td><td><input type="password" name="user_password"></td></tr>
						</table>
						<input type="submit" value="login" name="submit">
=======
<<<<<<< Updated upstream
						<form action="index.php" method="POST"> <!--controleur-->
=======
						<form action="../Controller/login.php" method="POST">
>>>>>>> Stashed changes
							USERNAME : <input type="text" name="uname">
							PASSWORD : <input type="password" name="pass">
							<input type="submit" value="login" name="submit">
>>>>>>> Stashed changes
						</form>	
						
				</center>
			</td>
		</table>
    </div>


</section>
<!-- /end section content-->
	
>>>>>>> Stashed changes
</body>

<?php
		include 'footer.html';
?>
</html>