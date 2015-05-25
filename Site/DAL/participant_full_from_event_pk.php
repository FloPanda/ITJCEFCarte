<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'
	SELECT * FROM participant
	WHERE
	part_ev_pk='.$pk.'
	');	// DAL
	$compte=0;
	while($row = mysqli_fetch_array($sql)) 
	{
		$part_array[$compte]['part_pk']=$row['part_pk'];
		$part_array[$compte]['part_present']=$row['part_present'];
		$part_array[$compte]['part_subscribed']=$row['part_subscribed'];
		$part_array[$compte]['part_ev_pk']=$row['part_ev_pk'];
		$part_array[$compte]['part_user_pk']=$row['part_user_pk'];
		
		$compte++;
	}

?>

