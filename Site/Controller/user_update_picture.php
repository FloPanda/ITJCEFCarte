<?php



// if var required
$user_array=null;

//Rajout du chemin relatif au lieu de stockage des images sur le serveur. Pas d'upload.
$user_array['user_picture']="../Ressources/Images/".$_POST['user_picture'];
$user_array['user_uuid']=$_POST['user_uuid'];

//envoi des informations pour update user
include '../DAL/user_picture_update.php';


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