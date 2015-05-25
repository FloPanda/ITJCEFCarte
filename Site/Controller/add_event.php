<?php

	include( '../Model/DataModel/event_full_DM.php');



	$ev=new event_full(null);
	
	if(isset($_POST['ev_name']) && $_POST['ev_name']!=null   )
	{$ev->ev_name=$_POST['ev_name'];}
	if(isset($_POST['ev_address'])&& $_POST['ev_address']!=null   )
	{$ev->ev_address=$_POST['ev_address'];}
	if(isset($_POST['ev_date'])&& $_POST['ev_date']!=null   )
	{$ev->ev_date=$_POST['ev_date'];}
	if(isset($_POST['ev_description'])&& $_POST['ev_description']!=null   )
	{$ev->ev_description=$_POST['ev_description'];}
	
	if(isset($_POST['ev_picture'])&& $_POST['ev_picture']!=null   )
	{
		$ev->ev_picture=$_POST['ev_picture'];
	
	}
	else
	{
		$ev->ev_picture='../Ressources/Images/nopic_default.jpg';
	}
	if(isset($_POST['ev_max_participants'])&& $_POST['ev_max_participants']!=null   )
	{$ev->ev_max_participants=$_POST['ev_max_participants'];}
	if(isset($_POST['ev_price'])&& $_POST['ev_price']!=null   )
	{$ev->ev_price=$_POST['ev_price'];}
	if(isset($_POST['user_list'])&& $_POST['user_list']!=null   )
	{$ev->ev_charged_member=$_POST['user_list'];}
	if(isset($_POST['com_list'])&& $_POST['com_list']!=null   )
	{$ev->ev_com_linked=$_POST['com_list'];}

	
	
	include('../DAL/insert_event.php');


?>