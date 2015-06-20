<?php
	// foreach (glob("../Model/DataModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	// foreach (glob("../Model/ViewModel/*.php") as $filename)
	// {
		// include $filename;
	// }
	
	ob_start( );
	$is_index=true;
	include '../Model/DataModel/user_full_DM.php';
	include('../Model/ViewModel/user_list_login.php');
	include '../View/header.php';

	
	$toto=new user_list_login();
	
	if(!($_POST['user_uuid']))
	{
		header('Location: ' . '../View/index.php', true);
		die();
	}
	
	//$user_concerned=new user_full(null);
	
			foreach($toto->user_list as $value)
			{
				if($_POST['user_uuid']==$value->user_uuid && $_POST['user_password']==$value->user_password)
				{
					//$user_concerned=new user_full($_POST['user_uuid']);
					echo($value->user_uuid);
					echo($value->user_password);
					echo ("OK!");
					
					//$user_concerned=new user_full($_POST['user_uuid']);
					$_SESSION['user_user_type'] = $value->user_user_type;
					$_SESSION['user_surname'] = $value->user_surname;
					$_SESSION['user_uuid'] = $value->user_uuid;
					$_SESSION['user_is_admin'] = $value->user_is_admin;
					$_SESSION['user_pk'] = $value->user_pk;
					ob_end_clean();
					
					//refus des membres en attente
					if($value->user_user_type==4){header('Location: ../View/user_non_droits.php');}
					else{header('Location: ../View/trombinoscope.php');}

					break;
				}
				else
				{
					echo($value->user_uuid);
					echo($value->user_password);
					echo ("NON.");
				}
			}
ob_end_flush( );	
?>

	