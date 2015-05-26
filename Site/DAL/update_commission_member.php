<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'UPDATE 
	`commission_member` 
	SET 
	comm_fin=NOW()
	WHERE
	comm_fin IS NULL
	and
	comm_user_pk=(SELECT user_pk
			   FROM user
			   WHERE user_pk = '.$_POST['user_pk'].'
			  )
	')
	or die('Error: '.mysqli_error($link));
	
	

	
?>