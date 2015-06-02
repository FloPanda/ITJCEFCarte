<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'UPDATE 
	`periode` 
	SET 
	periode_fin=NOW()
	WHERE
	periode_fin IS NULL
	and
	periode_user=(SELECT user_pk
			   FROM user
			   WHERE user_pk = '.$_POST['user_pk'].'
			  )
	')
	or die('Error: '.mysqli_error($link));
	
	

	
?>