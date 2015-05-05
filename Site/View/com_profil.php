<!DOCTYPE html>
<html>

<?php
	include '..\Controller\com_profil.php';
	include 'header.php';
	include 'head.html';
	include 'dashboard.html';
?>

	<body>
	
	<section class="section-content">
 
 
    <div class="content" >
		<table height="100%" width="100%">
					<td>
					<h1 style="text-align:center">

					<?php 

					?>
					</h1>

					<br/>


					<?php 

					
						
						



echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <img style="display:block; width:150px;height:150px;" src='.$com_concerned->com_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$com_concerned->com_name.'</h4>
						                <form action="./edit_com.php" method="POST">
						                	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
										</form>
						            </div>
						            <div class="modal-body">
						                
						     
						            	<p>Description : '.$com_concerned->com_description.'</p>
						            	
						                						       
						            </div>
						            <div class="modal-footer">
						                
									</div>
						        </div>
						    </div>
						</div>
						');
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