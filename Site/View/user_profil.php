<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.html';
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width=100%>
					<td>
					<h1 style="text-align:center">
					</h1>

					<br/>


					<?php 
						include '..\Controller\user_profil.php';
					?>
					
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