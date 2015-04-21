<?php

	include '../View/header.php';
	include '../View/head.html';
	include '../View/dashboard.html';
	
	include( '../Model/DataModel/user_full_DM.php');



	$us=new user_full(null);
	

	$us->user_name=$_POST['user_name'];
	$us->user_surname=$_POST['user_surname'];
	$us->user_birth=$_POST['user_birth'];
	$us->user_sex=$_POST['user_sex'];
	$us->user_nation=$_POST['user_nation'];
	$us->user_member_type=$_POST['user_member_type'];
	$us->user_company=$_POST['user_company'];
	$us->user_company_title=$_POST['user_company_title'];
	$us->user_cell_phone=$_POST['user_cell_phone'];
	$us->user_land_phone=$_POST['user_land_phone'];




	
	$us->user_email_company=$_POST['user_email_company'];
	$us->user_email_perso=$_POST['user_email_perso'];
	$us->user_weixin=$_POST['user_weixin'];
	$us->user_skype=$_POST['user_skype'];
	$us->user_address=$_POST['user_address'];
	$us->user_comment=$_POST['user_comment'];

	
	include('../Model/ViewModel/user_list_uuid.php');
	
	$uuid_list=new user_list_uuid();
	
	
	
		$uniqueid=true;
	
		do  //uuid unique
		{
			$uniqueid=true;
		
		
			foreach($uuid_list->user_list_uuid as $value)
			{
				if($us->user_uuid==$value->user_uuid)
				{
					$uniqueid=false;
				}
				
			}
		
			if($uniqueid==true)
			{
				break;
			}
		}
		while (true);
		
		
	
	
	include('../DAL/insert_user.php');


?>