<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.php';
	
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
				<td>
					<h1 style="text-align:center">
						Nouvel Evenement
					</h1>

					<br/>


					<?php 
						
					?>

					
					
						<title>Ajouter un Evènement</title>
					
			
					
					
						<form action="../Controller/add_event.php" method="POST">
							<table>
								<tr>
									<td>	
										Nom : 	
									</td>
									<td>
										<input type="text" name="ev_name" >
									</td>
								</tr>
								<tr>
									<td>
										Adresse : 		
									</td>
									<td>
										<input type="text" name="ev_address" >
									<td>
								</tr>
								<tr>
									<td>
										Date:
									</td>
									<td>
										<input type="date" name="ev_date" >
									</td>
								</tr>
								<tr>
									<td>	
										Description : 
									</td>
									<td>
										<textarea name="ev_description" ></textarea>
									</td>
								</tr>
								<tr>										
									<td>
										Participants maximum :
									</td>
									<td>
										<input type="text" name="ev_max_participants">
									</td>
								</tr>
								<tr>
									<td>
										Prix :
									</td>
									<td> 
										<input type="text" name="ev_price" >
									</td>
								</tr>
								<tr>
									<td>
										Photo :
									</td>
									<td>
										<input type="file" name="ev_picture">
									</td>
								</tr>
								<tr>
									<td>
										Membre en charge :
									</td>
									<td>
										<?php include  '..\Controller\user_list.php'; ?>
									</td>
								</tr>
								<tr>
									<td>
										Commission en charge :
									</td>
									<td>
										<?php include  '..\Controller\com_list.php'; ?>
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