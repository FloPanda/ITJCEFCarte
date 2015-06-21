<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.php';
?>

<body>

					
	<section class="section-content">
			<div class="content">

			<!-- content page -->
			<article class="content-page">
				<!-- main page, you're application here -->
				<div class="main-page">

						<div id="myModal"  ;>
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
<?php

	include '..\Controller\statistiques_user.php';
	
?>
						<h2> Statistiques membres par période </h2>
						<form action="../View/statistiques_user_date.php" method="POST">
						du <input type="date" name="user_date_1" >
						au <input type="date" name="user_date_2" >
						<input type="submit" value="Recherche" name="submit">
						</form>

													       
						            </div>
						        </div>
						    </div>
						</div>
					
				</div>
			</article>



	    </div>
	</section>
</body>						
						
<?php
						include 'footer.html';
?>
</html>