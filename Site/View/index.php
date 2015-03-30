<!DOCTYPE html>
<html>
	<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="jquery-1.11.2.min.js"></script>

		<?php
			include 'stil.php';
			require ('sql_connect.php');
			$T1='JCEF Login';
		?>
		<title>JCEF Login Page</title>
	</head>

	<body bgcolor=silver>
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




				<script>
				if(localStorage.getItem('username')===null)
				{
					document.write("Bonjour Invité!");
				}
				else 
				{
					var toto = localStorage.username;
				    document.write("Bonjour,".toto);
				}
				</script>


				<?php 
				$sql=mysql_query("SELECT * FROM user");
					while($row = mysql_fetch_array($sql))
					{
					    print $row['user_name']." - ".$row['user_password'];
					}
				?>

				<center>
					<form action="login.php" method="POST">
						USERNAME : <input type="text" name="uname">
						PASSWORD : <input type="password" name="pass">
						<input type="submit" value="login" name="submit">
					</form>	
				</center>
			</td>
		</table>
	</body>
</html>