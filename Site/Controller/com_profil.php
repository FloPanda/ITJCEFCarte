<?php	

//"892300000"

include '..\Model\DataModel\commission_full_DM.php';

$com_concerned=new commission_full($_POST['com_pk']);


echo('

					


					<div id="myModal"  ;>
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <img style="display:block; width:250px;height:150px;" src='.$com_concerned->com_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$com_concerned->com_name.'</h4>
						                <form action="./edit_com.php" method="POST">
						                	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
										</form>
										<form action=".././Controller/delete_com.php" method="POST">
						                	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Supprimer cette commission">
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