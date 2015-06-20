<?php
	$link = mysqli_connect('localhost','jcef','jcef',"jcef-bdd"); 
    if (!$link) { 
        die('Could not connect to MySQL: ' . mysqli_error($link)); 
    } 
?>