<!DOCTYPE html>
<html>
	<head>

		<?php
			//include '.html';
			require ('../DAL/sql_connect.php');
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
					document.write("Bonjour Invite!");
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