<?php	

ini_set('display_errors',1);
error_reporting(E_ALL);

	$link=null;
	
	include('sql_connect.php');
	$query = mysqli_query($link,
	'INSERT INTO `commission_member` 
			(
			comm_debut,
			comm_fin,
			comm_user_pk,
			comm_com_pk
			)
			VALUES
			(
			NOW(),
			null,
			(SELECT user_pk
			   FROM user
			   WHERE user_uuid = '.$_POST['user_uuid'].'
			  ),
			(SELECT com_pk
			   FROM commission
			   WHERE com_pk = '.$_POST['com_list'].'
			  )
			)'
			)
			
			or die('Error: '.mysqli_error($link));

?>
