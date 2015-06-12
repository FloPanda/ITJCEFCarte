<?php
// TODO : rendre fonctionnel
$bool = true;

if ($bool){
	header('Content-type: application/json');
	echo("ok");
}else{
	header("HTTP/1.1 401 Unauthorized");
	exit;
}	
?>

	