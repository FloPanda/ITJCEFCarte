<?php



// if var required
$user_array=null;

$user_array['user_password']=$_POST['user_password'];
$user_array['user_uuid']=$_POST['user_uuid'];

//envoi des informations pour update user
include '../DAL/user_password_update.php';


//transmission des infos
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