<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.php';
	
	$T1='JCEF Add User';
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
					<h1 style="text-align:center">
						Nouvelle Commission
					</h1>

					<br/>


					<?php 
						
					?>

					
					
						<title>Ajouter une commission</title>
					
			
					
					
						<form action="../Controller/add_commission.php" method="POST">
							<table>
								<tr>
									<td>	
										Nom : 	
									</td>
									<td>
										<input type="text" name="com_name" >
									</td>
								</tr>
								<tr>
									<td>
										Description : 		
									</td>
									<td>
										<textarea name="com_description"></textarea>  
									<td>
								</tr>
								
								<tr>
									<td>
										Photo :
									</td>
									<td>
										<input type="file" name="com_picture">
									</td>
								</tr>
								<tr>
									<td>
										Commission ouverte :
									</td>
									<td> 
										<input type="radio" name="com_is_open" checked="checked" value="1"> Oui<br>
										<input type="radio" name="com_is_open" value="0"> Non
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
    </br></br>
    </div>
</br></br>


</section>
<!-- /end section content-->
	
</body>

<?php
		include 'footer.html';
?>
</html>