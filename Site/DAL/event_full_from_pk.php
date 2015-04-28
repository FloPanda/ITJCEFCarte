<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,"SELECT * FROM event");	// DAL
	$compte=0;
	while($row = mysqli_fetch_array($sql)) 
	{
		if($row['ev_pk']==$pk)
		{
			$event_array[$compte]['ev_pk']=$row['ev_pk'];
			$event_array[$compte]['ev_name']=$row['ev_name'];
			$event_array[$compte]['ev_address']=$row['ev_address'];
			$event_array[$compte]['ev_date']=$row['ev_date'];
			$event_array[$compte]['ev_description']=$row['ev_description'];
			$event_array[$compte]['ev_picture']=$row['ev_picture'];
			$event_array[$compte]['ev_max_participants']=$row['ev_max_participants'];
			$event_array[$compte]['ev_participants']=$row['ev_participants'];
			$event_array[$compte]['ev_price']=$row['ev_price'];
			$event_array[$compte]['ev_nb_subscribed']=$row['ev_nb_subscribed'];
			$event_array[$compte]['ev_charged_member']=$row['ev_charged_member'];
			$event_array[$compte]['ev_com_linked']=$row['ev_com_linked'];
			
			$compte++;
		}
	}

	if ($compte==0)
	{
	 echo "fail ici event";
	}

?>

