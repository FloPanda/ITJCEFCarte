<!DOCTYPE html>
<html>
<?php	
	require( '../Model/ViewModel/ev_list_trombinoscope.php');

					$count=0;
					$test=new ev_list_trombinoscope();
					echo "<table>";

					$today = date("Y-m-d");

					
					foreach($test->ev_list as $value)
					{	
						if($value->ev_date >= $today)
						{
							//echo $value->ev_date .'<'. $today;

							if($count%6==0)
							{
								echo "<tr>";
							}
							$count++;
							
									
							echo "<td><!--<div class='col-md-1'>-->";
							echo "<form action='../View/event_profil.php' method='POST'>";
							echo '<p class="bg-info">';
							echo '<input type="hidden" name="ev_pk" value="'.$value->ev_pk.'">';
							echo "<center><img style='display:block; width:150px;height:100px;' src=".$value->ev_picture." class='img-circle'>";											
							echo '<h5 class="modal-title">'.$value->ev_name." ";
							echo "</h5>";
							echo '<input class="btn btn-primary" type="submit" name="submit" value="Voir">';
							//echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
							echo "</p>";
							echo "</form></td>";
							if($count%6==0)
							{
								echo "</tr>";
							}
						}												
					}
					echo "</table>";
					
					
					
					echo '<br><br><br>Evenements passes :<br><br>';
					echo "<table>";
					$count=0;
					foreach($test->ev_list as $value)
					{	
						if($value->ev_date < $today)
						{
							//echo $value->ev_date .'<'. $today;

							if($count%6==0)
							{
								echo "<tr>";
							}
							$count++;
							
									
							echo "<td><!--<div class='col-md-1'>-->";
							echo "<form action='../View/event_profil.php' method='POST'>";
							echo '<p class="bg-info">';
							echo '<input type="hidden" name="ev_pk" value="'.$value->ev_pk.'">';
							echo "<center><img style='display:block; width:150px;height:100px;' src=".$value->ev_picture." class='img-circle'>";											
							echo '<h5 class="modal-title">'.$value->ev_name." ";
							echo "</h5>";
							echo '<input class="btn btn-primary" type="submit" name="submit" value="Voir">';
							//echo '<h6 class="modal-title">'.$value->user_jcef_function."</h6>";
							echo "</p>";
							echo "</form></td>";
							if($count%6==0)
							{
								echo "</tr>";
							}
							
							
						}												
					}
					echo "</table>";
					?>