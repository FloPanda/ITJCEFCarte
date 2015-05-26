<?php

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
	header('Location: ../View/commissions_trombinoscope.php'); 
?>