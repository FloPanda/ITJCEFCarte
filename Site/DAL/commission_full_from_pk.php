<?php	
	$link=null;
	
	include 'sql_connect.php';
	$sql=mysqli_query($link,"SELECT * FROM commission");	// DAL
	$compte=0;
	while($row = mysqli_fetch_array($sql)) 
	{
		if($row['com_pk']==$pk)
		{
			$com_array[$compte]['com_pk']=$row['com_pk'];
			$com_array[$compte]['com_name']=$row['com_name'];
			$com_array[$compte]['com_description']=$row['com_description'];
			$com_array[$compte]['com_picture']=$row['com_picture'];
			
			$compte++;
		}
	}

	if ($compte==0)
	{
	 echo "fail ici comm";
	}

?>

