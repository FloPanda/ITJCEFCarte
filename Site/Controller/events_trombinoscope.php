<!DOCTYPE html>
<html>
	<?php	
		require( '../Model/ViewModel/ev_list_trombinoscope.php');
		include '../View/header.php';
		include '../View/head.html';
		include '../View/dashboard.html';
		require ('../DAL/sql_connect.php');
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
				<h1 class="modal-title" align=center>Events trombinoscope</h1>
					<div class="row-fluid">
					<div class="span8">
							
					<?php 
					$count=0;
					$test=new ev_list_trombinoscope();
					echo "<table>";					
					foreach($test->ev_list as $value)
					{	
						if($count%6==0)
						{
							echo "<tr>";
						}
						$count++;
						
								
						echo "<td><!--<div class='col-md-1'>-->";
						echo "<form action='../View/event_profil.php' method='POST'>";
						echo '<p class="bg-info">';
						echo '<input type="hidden" name="ev_pk" value="'.$value->ev_pk.'">';
						echo "<center><img style='display:block; width:80px;height:80px;' src=".$value->ev_picture." class='img-circle'>";											
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
					echo "</table>";
					?>
					</div>
				</div>
			</div>

			</div>
			</div>
			</article>



	    </div>
	</section>
	<!-- /end section content-->	
	</body>
	<?php
		include '../View/footer.html';
	 ?>

</html>