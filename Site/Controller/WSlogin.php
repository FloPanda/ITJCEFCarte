<?php
// TODO : rendre fonctionnel
$bool = true;

header('Access-Control-Allow-Origin: *');
if ($bool){
	header('Content-type: application/json');
    //renvoie une valeur permettant de déterminer si l'utilisateur a les droits de scan
	echo("1");
}else{
	header("HTTP/1.1 401 Unauthorized");
	exit;
}	
?>

	