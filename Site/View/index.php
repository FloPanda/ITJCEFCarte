<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.html';
	require ('../DAL/sql_connect.php');
	
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
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