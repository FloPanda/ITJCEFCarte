<?php

	
	include '../View/header.php';
	include '../View/head.html';
	include '../View/dashboard.php';
	
	include( '../Model/DataModel/commission_full_DM.php');



	$co=new commission_full(null);
	
	if(isset($_POST['com_name']))
	{$co->com_name=$_POST['com_name'];}
	if(isset($_POST['com_description']))
	{$co->com_description=$_POST['com_description'];}
	if(isset($_POST['com_picture']))
	{
		$co->com_picture=$_POST['com_picture'];
	}
	else
	{
		$co->com_picture='../Ressources/Images/nopic_default.jpg';
	}
	
	
	
	include('../DAL/insert_commission.php');

?>