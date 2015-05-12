<!DOCTYPE html>
<html>

<?php
	// foreach (glob("../Model/DataModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	// foreach (glob("../Model/ViewModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	
	
	
	include '../View/header.php';
	include '../View/head.html';
	include '../View/dashboard.html';
	require ('../DAL/sql_connect.php');
	
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
					
							<h1 class="modal-title" align=center>Connexion</h1>
						

					<br/>


					
					

					<center>
					
						<title>JCEF Login Page</title>
					
						<script>
						if(localStorage.getItem('username')===null)
						{
							document.write("Bonjour Invite!");
						}
						else 
						{
							var username = localStorage.username;
							document.write("Bonjour,".username);
						}
						</script>
					
					
						<form action="index.php" method="POST">
						<table>
						<tr>
						 <!--controleur-->
							<td>Nom d'Utilisateur : </td><td><input type="text" name="uname"></td></tr><tr>
							<td>Mot de Passe : </td><td><input type="password" name="pass"></td></tr>
						</table>
						<input type="submit" value="login" name="submit">
						</form>	
						
				</center>
			</td>
		</table>
    </div>


</section>
<!-- /end section content-->
	
</body>

<?php
		include '../View/footer.html';
?>
</html>