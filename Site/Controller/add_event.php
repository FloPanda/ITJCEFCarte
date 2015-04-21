<?php

	include '../View/header.php';
	include '../View/head.html';
	include '../View/dashboard.html';
	
	include( '../Model/DataModel/event_full_DM.php');



	$ev=new event_full(null);
	
	if(isset($_POST['ev_name']))
	{$ev->ev_name=$_POST['ev_name'];}
	if(isset($_POST['ev_address']))
	{$ev->ev_address=$_POST['ev_address'];}
	if(isset($_POST['ev_date']))
	{$ev->ev_date=$_POST['ev_date'];}
	if(isset($_POST['ev_description']))
	{$ev->ev_description=$_POST['ev_description'];}
	
	if(isset($_POST['ev_picture']))
	{
		$ev->ev_picture=$_POST['ev_picture'];
	
	}
	if(isset($_POST['ev_max_participants']))
	{$ev->ev_max_participants=$_POST['ev_max_participants'];}
	if(isset($_POST['ev_price']))
	{$ev->ev_price=$_POST['ev_price'];}
	//$ev->ev_charged_member=$_POST['ev_charged_member'];
	//$ev->ev_com_linked=$_POST['ev_com_linked'];


	
	include('../DAL/insert_event.php');


?>