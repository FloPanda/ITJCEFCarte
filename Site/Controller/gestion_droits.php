<?php	
require( '../Model/ViewModel/user_list_trombinoscope.php');


	$count=0;
	$test=new user_list_trombinoscope();
	echo '<table style="border: 1px solid black">';	
	
	echo '<tr style="border: 1px solid black">';
		
	echo '<td style="border: 1px solid black">';
	
	echo "<!--<div class='col-md-1'>-->";
	echo '<div style="display:block; width:150px;height:25px;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$count.'">';					
	
	echo '<h5 class="modal-title"> Nom et fonction ';
	echo "</h5>";
	echo '<h6 class="modal-title"> </h6>';
	
	echo "</center></div>";
	
	echo '<!--</div>-->
	
	</td>
	<td style="border: 1px solid black;">  Type Membre </td>
	<td style="border: 1px solid black;">  Fonction </td>
	<td style="border: 1px solid black;">  Validation </td>';
			
	echo "</tr>";

	
	foreach($test->user_list as $value)
	{	
	
		if($value->user_member_type==1&&$value->user_user_type!=4)  // Car la gestion des droits s'effectue uniquement pour les membres et pas ceux en attente!
		{
	
			echo '<tr style="border: 1px solid black">';
			
			$titlecontent=($value->user_surname.' '.$value->user_name);
							
			echo '<td style="border: 1px solid black">';
		
			echo "
			<!--<div class='col-md-1'>-->";
			echo '<div style="display:block; width:150px;height:75px;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$count.'">';					
			
			echo '<h5 class="modal-title">'.$value->user_surname." ";
			echo $value->user_name."</h5>";
			echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
			
			echo "</center></div>";
			
			echo '<!--</div>-->
			
			</td>
			
			<form method="POST" action="../Controller/user_droits_update.php">  
				<td style="border: 1px solid black">
					<SELECT name="user_user_type" size="1">
					<OPTION VALUE="3"'; if($value->user_user_type==3){echo('selected');} echo('>Membre</option>
					<OPTION VALUE="2"');if($value->user_user_type==2){echo('selected');} echo('>Directeur commission</option>
					<OPTION VALUE="1"');if($value->user_user_type==1){echo('selected');} echo('>Admin</option>
					</SELECT>
				</td>
				
				<td>
					<INPUT type="text" value="'.$value->user_jcef_function.'" name="user_jcef_function">
				</td>
				<td>
					<input class="btn btn-primary" type="submit" name="submit" value="Sauvegarder">
				</td>
				<input type="hidden" name="user_uuid" value="'.$value->user_uuid.'">
			</form>
			
			');
			
			
			
			
			echo "</tr>";

		}		
							
	}
	echo "</table></br></br></br>";
?>