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

	<body>
	
	<section class="section-content">
 
 
    <div class="content">
		<table height="100%" width=100%>
				<td>
					<h1 style="text-align:center">
						<span style="background:gainsboro;padding:4px">
							<?php 
								//echo"$T1 ";
							?>
						</span>
					</h1>

					<br/>

				
				<center>
				
					<?php 
					
					$test=new user_list_trombinoscope();
					foreach($test->user_list as $value)
					{
						echo $value->user_name;
						echo $value->user_surname;
						echo $value->user_jcef_function;
						echo "</br>";
						
					}
					?>
					
				</center>
			</td>
		</table>
    </div>


</section>
<!-- /end section content-->
	
</body>

<?php
		include '../View/footer.html';
?>
</html>