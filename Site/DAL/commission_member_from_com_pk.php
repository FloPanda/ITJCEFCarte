<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,
	'SELECT *
	FROM `commission_member` 
	WHERE
	comm_com_pk='.$com_concerned->com_pk.'
	and
	comm_fin IS NULL'
	)
	or die("Error: ".mysqli_error($link));
	
	$compte=0;
	
	if(isset($sql))
	{
	
		while($row = mysqli_fetch_array($sql)) 
		{

				$cm_array[$compte]['comm_debut']=$row['comm_debut'];
				$cm_array[$compte]['comm_fin']=$row['comm_fin'];
				$cm_array[$compte]['comm_pk']=$row['comm_pk'];
				$cm_array[$compte]['comm_user_pk']=$row['comm_user_pk'];
				$cm_array[$compte]['comm_com_pk']=$row['comm_com_pk'];
				
				
				$compte++;
			
		}
	}
	
?>