<!DOCTYPE html>
<html>
	<?php	
		require( '../Model/ViewModel/user_list_trombinoscope.php');
		include '../View/header.php';
		include '../View/head.html';
		include '../View/dashboard.html';
	?>
	<body>
		<section class="section-content">
    		<div class="content">

    		<!-- content page -->
                <article class="content-page">
                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">

				<div class="container-fluid">
				<h1 class="modal-title" align=center>Trombinoscope</h1>
					<div class="row-fluid">
					<div class="span8">
							
					<?php 
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
					<td style="border: 1px solid black"> Type Adherent </td>
					<td style="border: 1px solid black"> Type Membre </td>
					<td style="border: 1px solid black"> Fonction </td>';
							
					echo "</tr>";

					
					foreach($test->user_list as $value)
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
						
						<td style="border: 1px solid black">
							<input type="radio" name="user_member_type" checked="checked" value="2"> Membre<br>
							<input type="radio" name="user_member_type" value "1"> Pengyou
						</td>
						
						<td style="border: 1px solid black">
							<SELECT name="type" size="1">
							<OPTION>Membre
							<OPTION>Directeur commission
							<OPTION>Admin
							</SELECT>
						</td>
						
						<td>
							<INPUT type="Fonction" value="'.$value->user_jcef_function.'" name="Fonction">
						</td>
						
						';
						
						
						
						
						echo "</tr>";	
											
					}
					echo "</table>";
					?>
					</div>
				</div>
			</div>

			</div>
			</div>
			</article>



	    </div>
		</br>
		</br>
		</br>
	</section>
	<!-- /end section content-->	
	</body>
	<?php
		include '../View/footer.html';
	 ?>

</html>