<?php 

include '../Model/DataModel/commission_full_DM.php';


$com_concerned=new commission_full($_POST['com_pk']);
					
$titlecontent=$com_concerned->com_name;



echo('

						               <form method="POST" action="../Controller/commission_update.php"> 
						                <img style="display:block; max-width:250px;height:auto;" src='.$com_concerned->com_picture.' class="img-rounded">
						                <h4 class="modal-title">'.$com_concerned->com_picture.'</h4> <input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
						            </div>
						            <div class="modal-body">
						            
						                
						            	<input type="hidden" name="com_pk" value="'.$com_concerned->com_pk.'">
										<p>Nom : <input type="text" name="com_name" value="'.$com_concerned->com_name.'"</p>
						            	<p>Photo : <input type="file" name="com_picture" value="'.$com_concerned->com_picture.'"</p>
						            	<p>Description : <textarea name="com_description">'.$com_concerned->com_description.'</textarea></p>
										<p>
										Commission ouverte :
										<input type="radio" name="com_is_open" '); if($com_concerned->com_is_open==1){echo('checked="checked"');} echo(' value="1"> Oui<br>
										<input type="radio" name="com_is_open" '); if($com_concerned->com_is_open==0){echo('checked="checked"');} echo(' value="0"> Non </p>
						                						       
						            </div>
						');
?>