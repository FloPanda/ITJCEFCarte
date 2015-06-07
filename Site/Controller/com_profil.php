<?php	

//"892300000"

include '..\Model\DataModel\commission_full_DM.php';

$com_concerned=new commission_full($_POST['com_pk']);


echo('
						                <img style="display:block; max-width:250px;height:auto;" src='.$com_concerned->com_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$com_concerned->com_name.'</h4>');
						                
if(isset($_SESSION['user_uuid']))
{
	if($_SESSION['user_is_admin']==1||$_SESSION['user_user_type']==1||$_SESSION['user_user_type']==2)
	{
		echo('										
										<form action="./edit_com.php" method="POST">
						                	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Editer">
										</form>
										<form action=".././Controller/delete_com.php" method="POST">
						                	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'"> 
										    <input class="btn btn-primary" type="submit" name="submit" value="Supprimer cette commission">
										</form>

		');
	}									
}	
echo('					            </div>
						            <div class="modal-body">
						                
						     
						            	<p>Description : '.$com_concerned->com_description.'</p>
						            	
										<p>Commission actuellement '); if($com_concerned->com_is_open==1){echo('ouverte.</p>');}else{echo('fermée.</p>');}
										echo('
						                						       
						            </div>
						');

?>