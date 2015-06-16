<?php
// TODO : rendre fonctionnel
$bool = true;

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
if ($bool){
	echo("ok");
}else{
    echo("utilisateur non inscrit");
	exit;
}	
?>