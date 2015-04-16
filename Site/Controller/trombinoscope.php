<!DOCTYPE html>
<html>

<?php
	// foreach (glob("../Model/DataModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	// foreach (glob("../Model/ViewModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	
	
	require( '../Model/ViewModel/user_list_trombinoscope.php');
	include '../View/header.php';
	include '../View/head.html';
	include '../View/dashboard.html';
	require ('../DAL/sql_connect.php');
	//$T1='JCEF Login';
?>
	<script src="../JS/bootbox.js"></script>
	<body>

	<section class="section-content">
 
 
    <div class="content">
		<div class="container-fluid">
				<div class="row">
				
					<?php 
					
					$test=new user_list_trombinoscope();
					
					//header('Content-type: image/jpeg');
					foreach($test->user_list as $value)
					{	
						echo "<div class='col-md-1'><center>";
						echo "<img style='display:block; width:100px;height:100px;' src=".$value->user_picture." class='img-rounded'>";
						//file_get_contents($value->user_picture);					
						echo $value->user_surname." ";
						echo $value->user_name."<br>";
						echo $value->user_jcef_function;
						echo "</center></div>";
						//bootbox.alert("Hello world!");
						
					}
					?>

					</div>
					</div>
    </div>


</section>
<!-- /end section content-->
	
</body>

<?php
		include '../View/footer.html';
?>
</html>