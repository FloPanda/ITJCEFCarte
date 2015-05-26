<?php
// if var required
$user_array=null;

$user_array['user_picture']=$_POST['user_picture'];
$user_array['user_jcef_function']=$_POST['user_jcef_function'];
$user_array['user_nation']=$_POST['user_nation'];
$user_array['user_company']=$_POST['user_company'];
$user_array['user_subscription_date']=$_POST['user_subscription_date'];
$user_array['user_email_jcef']=$_POST['user_email_jcef'];
$user_array['user_birth']=$_POST['user_birth'];
$user_array['user_sex']=$_POST['user_sex'];
$user_array['user_skype']=$_POST['user_skype'];
$user_array['user_weixin']=$_POST['user_weixin'];
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

echo('
<html>
<head>

</head>
	<body>
		<form id="uuid" method="POST" name="uuid" action="../View/user_profil.php">
		  <input type="hidden" name="user_uuid" value="'.$_POST['user_uuid'].'" />
		</form>
		
		<script language="JavaScript">
		document.uuid.submit();
		</script>
	</body>
</html>

');

?>