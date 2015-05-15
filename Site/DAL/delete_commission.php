<?php	
	$link=null;
	include('sql_connect.php');
	$query = mysqli_query($link,
	'DELETE FROM `commission` 
			WHERE
			com_pk="'.$_POST['com_pk'].'"
			');


?>
