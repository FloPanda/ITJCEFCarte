<?php

include '../Model/DataModel/user_full_DM_pk.php';


// if var required
$user_array=null;

// les informations relatives aux drotis se front dans la partie admin uniquement.

$user_array['user_cell_phone']=$_POST['user_cell_phone'];
$user_array['user_land_phone']=$_POST['user_land_phone'];
$user_array['user_jcef_function']=$_POST['user_jcef_function'];
$user_array['user_nation']=$_POST['user_nation'];
$user_array['user_company']=$_POST['user_company'];
$user_array['user_company_title']=$_POST['user_company_title'];
$user_array['user_subscription_date']=$_POST['user_subscription_date'];
$user_array['user_email_jcef']=$_POST['user_email_jcef'];
$user_array['user_birth']=$_POST['user_birth'];
$user_array['user_sex']=$_POST['user_sex'];
$user_array['user_skype']=$_POST['user_skype'];
$user_array['user_weixin']=$_POST['user_weixin'];
$user_array['user_member_type']=$_POST['user_member_type'];
$user_array['user_email_company']=$_POST['user_email_company'];
$user_array['user_email_perso']=$_POST['user_email_perso'];
$user_array['user_address']=$_POST['user_address'];
$user_array['user_comment']=$_POST['user_comment'];
$user_array['user_renew_date']=$_POST['user_renew_date'];
$user_array['user_last_amount']=$_POST['user_last_amount'];

$user_concerned=new user_full($_POST['user_pk']);

if($user_concerned->user_member_type!=$_POST['user_member_type'])
{	//si ce membre devient pengyou ou ancien, sa période d'adhésion s'arrête s'il était membre avant
	if(($_POST['user_member_type']==2||$_POST['user_member_type']==3)&&$user_concerned->user_member_type==1) 
	{
		include '../DAL/update_periode.php';
	}
	else if($_POST['user_member_type']==1) //cas inverse, s'il devient membre, sa période commence.
	{
		$us->user_uuid=null;
		$us->user_uuid=$user_concerned->user_uuid;
		include '../DAL/insert_periode.php';
	}
}

//envoi des informations pour update user
include '../DAL/user_profil_update_var.php';



if(isset($_POST['com_list']))
{
	// nouvelle commission
	if(!isset($_POST['previous_com']))
	{
		include('../DAL/insert_commission_member_user_post.php');
	}
	// commission différente
	else if(!isset($_POST['previous_com'])||$_POST['previous_com']!=$_POST['com_list'])
	{
		// modification de l'ancienne information
		include('../DAL/update_commission_member.php');
		include('../DAL/insert_commission_member_user_post.php');
	}
}

//transmission des infos
echo(json_encode($us));

?>