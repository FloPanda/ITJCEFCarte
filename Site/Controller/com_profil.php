<?php	

//"892300000"

include '../Model/DataModel/commission_full_DM.php';

if(isset($_GET['com']))
{
	$com_concerned=new commission_full($_GET['com']);
}
else
{
	$com_concerned=new commission_full($_POST['com_pk']);
}

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
						
						////////////////////////////////
						// Trombi de la commission
						////////////////////////////////
						
						require( '../Model/ViewModel/user_list_trombinoscope.php');
						include( '../DAL/commission_member_from_com_pk.php');
						$count=0;
						$test=new user_list_trombinoscope();
						echo "<table id='table_trombi'>";					
						foreach($test->user_list as $value)
						{	
							if(isset($cm_array))
							{
								foreach($cm_array as $value_com)
								{
									if($value_com['comm_user_pk']==$value->user_pk)
									{
										if($count%6==0)
										{
											echo "<tr>";
										}
										$count++;
										$titlecontent=($value->user_surname.' '.$value->user_name);
										echo ('
										<div id="myModal'.$count.'" class="modal fade" style="display: none;>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img style="display:block; width:100px;height:100px;" src='.$value->user_picture.' class="img-rounded">
														<h4 class="modal-title">'.$titlecontent.'</h4>
													</div>
													<div class="modal-body">
														<p>Fonction : '.$value->user_jcef_function.'</p>
														<p>Pays : '.$value->user_nation.'</p>
														<p>Entreprise : '.$value->user_company.'</p>
														<p>Inscription : '.$value->user_subscription_date.'</p>
														<p>Email JCEF : '.$value->user_email_jcef.'</p>
																					   
													</div>
													<div class="modal-footer">
														<form action="../View/user_profil.php" method="POST">
															<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'"> 
															<input class="btn btn-primary" type="submit" name="submit" value="Voir Profil">
															<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
														</form>
														<!--<form action="../View/user_profil.php" method="GET">
															<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'">
															<input class="btn btn-primary" type="submit" name="submitt" value="Voir GET">
															
														</form>--!>
													</div>
												</div>
											</div>
										</div>
										');					
										echo "<td><!--<div class='col-md-1'>-->";
										
										echo '<div style="height:150px;width:150px;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$count.'">';
										echo "<center><img style='display:block; width:80px;height:80px;' src=".$value->user_picture." class='img-square'>";											
										echo '<h5 class="modal-title">'.$value->user_surname." ";
										echo $value->user_name."</h5>";
										echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
										echo "</center></div>";
										echo "<!--</div>--></td>";
										
										if($count%6==0)
										{
											echo "</tr>";
										}												
										
									
										
									}
								}
							}
						}
						echo "</table>";
							

?>