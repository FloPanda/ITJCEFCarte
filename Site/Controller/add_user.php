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
	$us->user_picture=$_POST['user_picture'];
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
		$us->user_uuid=round(rand()*100000000);
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


	

// //EMAIL plus tard
// // the message
// $msg = "Bienvenue à la JCEF!\nMerci de redéfinir votre mot de passe en cliquant sur le lien suivant : ".$randid;
// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);
// // send email
// mail("nom_du_mail_à_tester@free.fr","Votre nouveau compte",$msg);



	// if (isset($_POST['submit']))
	// {

		// $mdpwd=md5($us->upassword);
		// $user_qr_code_url="www.jcef/user/".$randid;
		


	// }
?>