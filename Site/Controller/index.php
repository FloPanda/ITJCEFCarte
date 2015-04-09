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
	$T1='JCEF Login';
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
					// $test=new user_list_trombinoscope();
					// $link = mysqli_connect('localhost','root','',"jcef-bdd"); // DAL
					// $sql=mysqli_query($link,"SELECT * FROM user");	// DAL
						// while($row = mysqli_fetch_array($sql)) 
						// {
						// // BUS
							// print $row['user_name']." - ".$row['user_password']; // mettre le résultat dans un objet datamodel, renvoyer le joyeux bordel au controleur
						// }
						
					
					?>
					

					<center>
					
						<title>JCEF Login Page</title>
					
						<script>
						if(localStorage.getItem('username')===null)
						{
							document.write("Bonjour Invite!");
						}
						else 
						{
							var toto = localStorage.username;
							document.write("Bonjour,".toto);
						}
						</script>
					
					
						<form action="index.php" method="POST"> <!--controleur-->
							USERNAME : <input type="text" name="uname">
							PASSWORD : <input type="password" name="pass">
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