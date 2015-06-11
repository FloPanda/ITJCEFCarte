<?php
ob_start( );

	
	include( '../Model/DataModel/user_full_DM.php');



	$us=new user_full(null);
	

	if(isset($_POST['user_name'])&&$_POST['user_name']!=null  )  { $us->user_name=$_POST['user_name'] ;}
	if(isset($_POST['user_surname'])&&$_POST['user_surname']!=null  )  { $us->user_surname=$_POST['user_surname'] ;}
	if(isset($_POST['user_birth'])&&$_POST['user_birth']!=null  )  { $us->user_birth=$_POST['user_birth'] ;}
	if(isset($_POST['user_sex'])&&$_POST['user_sex']!=null  )  { $us->user_sex=$_POST['user_sex'] ;}
	if(isset($_POST['user_nation'])&&$_POST['user_nation']!=null )  { $us->user_nation=$_POST['user_nation'] ;}
	if(isset($_POST['user_member_type'])&&$_POST['user_member_type']!=null  )  { $us->user_member_type=$_POST['user_member_type'] ;}
	if(isset($_POST['user_company'])&&$_POST['user_company']!=null  )  { $us->user_company=$_POST['user_company'] ;}
	if(isset($_POST['user_company_title'])&&$_POST['user_company_title']!=null  )  { $us->user_company_title=$_POST['user_company_title'] ;}
	if(isset($_POST['user_cell_phone'])&&$_POST['user_cell_phone']!=null  )  { $us->user_cell_phone=$_POST['user_cell_phone'] ;}
	if(isset($_POST['user_land_phone'])&&$_POST['user_land_phone']!=null  )  { $us->user_land_phone=$_POST['user_land_phone'] ;}
	if(isset($_POST['user_picture'])&&$_POST['user_picture']!=null  )  { $us->user_picture=$_POST['user_picture'] ;}
	if(isset($_POST['user_email_company'])&&$_POST['user_email_company']!=null  )  { $us->user_email_company=$_POST['user_email_company'] ;}
	if(isset($_POST['user_email_perso'])&&$_POST['user_email_perso']!=null  )  { $us->user_email_perso=$_POST['user_email_perso'] ;}
	if(isset($_POST['user_weixin'])&&$_POST['user_weixin']!=null  )  { $us->user_weixin=$_POST['user_weixin'] ;}
	if(isset($_POST['user_skype'])&&$_POST['user_skype']!=null  )  { $us->user_skype=$_POST['user_skype'] ;}
	if(isset($_POST['user_address'])&&$_POST['user_address']!=null  )  { $us->user_address=$_POST['user_address'] ;}
	if(isset($_POST['user_comment'])&&$_POST['user_comment']!=null  )  { $us->user_comment=$_POST['user_comment'] ;}
	
	include('../Model/ViewModel/user_list_uuid.php');
	
	$uuid_list=new user_list_uuid();
	
	
	
		$uniqueid=true;
	
		do  //uuid unique
		{
			$us->user_uuid=round(rand (1000000000, 9999999999)); // a remplacer par un intervalle
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

		$us->user_qr_code_url='https://appli.jcef-shanghai/user_profil.php?user='.$us->user_uuid;
		//echo($us->user_uuid);
		
		
	
	include('../DAL/insert_user.php');
	
	// Si c'est un membre, sa période d'adhésion commence
	if($_POST['user_member_type']==1) { include ('../DAL/insert_periode.php');}
	
	
	if(isset($_POST['com_list']))
	{
		include('../DAL/insert_commission_member.php');
	}

	if(isset($us->user_qr_code_url))
	{
		ob_end_clean( );
		header('Location: ../View/user_profil.php?user='.$us->user_uuid);
		exit;
	}
	//header( 'Location: https://appli.jcef-shanghai/user_profil.php?user='.$us->user_uuid);

ob_end_flush( );
?>