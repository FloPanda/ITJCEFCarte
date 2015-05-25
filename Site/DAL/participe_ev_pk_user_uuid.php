<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,'
	SELECT * 
	FROM participant
	WHERE
	part_ev_pk="'.$event_concerned->ev_pk.'"
	and
	part_user_pk="'.$_SESSION['user_pk'].'"
	');	// DAL
	$compte=0;
	
			echo ('
	SELECT * 
	FROM participant
	WHERE
	part_ev_pk="'.$event_concerned->ev_pk.'"
	and
	part_user_pk="'.$_SESSION['user_pk'].'"
	');	
	while($row = mysqli_fetch_array($sql)) 
	{
			$part_array[0]['part_ev_pk']=$row['part_ev_pk'];
			$part_array[0]['part_pk']=$row['part_pk'];
			$part_array[0]['part_present']=$row['part_present'];
			$part_array[0]['part_subscribed']=$row['part_subscribed'];
			$part_array[0]['part_user_pk']=$row['part_user_pk'];
			
			if($compte>0)
			{
				echo 'erreur participation numéro:'.$compte.' ; ';
			}
			
			$compte++;
		
	}

	/* if ($compte==0)
	{
		echo "pas de participation.";
	} */

?>

