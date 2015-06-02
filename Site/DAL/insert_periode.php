<?php	
	$link=null;
	
	include('sql_connect.php');

	$query = mysqli_query($link,
	'INSERT INTO `periode` 
			(
			`periode_user`,
			`periode_debut`,
			`periode_fin`
			
			)
			VALUES
			(
			(SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$us->user_uuid.'
			  ),
			NOW(),
			null
			
			)')
	or die('Error: '.mysqli_error($link));


?>

