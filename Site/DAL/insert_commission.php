<?php	

ini_set('display_errors',1);
error_reporting(E_ALL);

	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'INSERT INTO `commission` 
			(
			`com_name`,
			`com_description`,
			`com_picture`
			)
			VALUES
			(
			"'.$co->com_name.'",
			"'.$co->com_description.'",
			"'.$co->com_picture.'"
			)');

?>

