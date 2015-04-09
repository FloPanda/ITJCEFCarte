<?php

$sql=null;

include '../DAL/user_nsj.php';
echo $user_array;

$compte=0;

while($row = mysqli_fetch_array($sql)) 
{
// BUS
// print $row['user_name']." - ".$row['user_password']; // mettre le résultat dans un objet datamodel, renvoyer le joyeux bordel au controleur

	$user_array[$compte][0]=$row['user_name'];
	$user_array[$compte][1]=$row['user_surname'];
	$user_array[$compte][2]=$row['user_jcef_function'];
	$compte++;
}

if ($compte==0)
{
 echo "fail ici";
}
						
?>