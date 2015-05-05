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

include '../DAL/user_profil_update_var.php';

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