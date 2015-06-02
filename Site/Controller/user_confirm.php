
<?php	
	require( '../Model/ViewModel/user_list_trombinoscope.php');

	
$count=0;
$test=new user_list_trombinoscope();

foreach($test->user_list as $value)
{	
if($value->user_user_type==4)
	{
		echo('
		  <table style="width:100%">
		  <tr>
			<td>'.$value->user_name.'</td>
			<td>'.$value->user_surname.'</td>
			<td><form action=".././Controller/accept_user.php" method="POST">
													<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'"> 
													<input type="hidden" name="user_user_type" value="3"> 
													<input class="btn btn-primary" type="submit" name="submit" value="Accepter cet utlisateur">
												</form></td>
			<td><form action=".././Controller/delete_user.php" method="POST">
														<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'"> 
														<input class="btn btn-primary" type="submit" name="submit" value="Supprimer cet utilisateur">
													</form>	</td>
		  </tr>									
		'); 
	}	
}
echo "</table>";
?>
				
