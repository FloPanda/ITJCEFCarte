<?php
// TODO : rendre fonctionnel
$bool = true;

header('Access-Control-Allow-Origin: *');
if ($bool){
	header('Content-type: application/json');
	echo("ok");
}else{
	header("HTTP/1.1 401 Unauthorized");
	exit;
}	
?>

	