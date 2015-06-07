<?php
// if var required
$com_array=null;

$com_array['com_name']=$_POST['com_name'];
$com_array['com_description']=$_POST['com_description'];
$com_array['com_picture']="../Ressources/Images/".$_POST['com_picture'];
$com_array['com_is_open']=$_POST['com_is_open'];

include '../DAL/commission_profil_update_var.php';

echo('
<html>
<head>

</head>
	<body>
		<form id="pk" method="POST" name="pk" action="../View/com_profil.php">
		  <input type="hidden" name="com_pk" value="'.$_POST['com_pk'].'" />
		</form>
		
		<script language="JavaScript">
			document.pk.submit();
		</script>
	</body>
</html>

');

?>