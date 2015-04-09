<?php	
	$link=null;
	
	include 'sql_connect.php';
	/*$link = mysqli_connect('localhost','root','',"jcef-bdd"); // DAL */
	
	$sql=mysqli_query($link,"SELECT * FROM user");	// DAL

?>

