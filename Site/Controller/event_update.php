<?php
// if var required
$event_array=null;

$event_array['ev_picture']=$_POST['ev_picture'];
$event_array['ev_address']=$_POST['ev_address'];
$event_array['ev_date']=$_POST['ev_date'];
$event_array['ev_description']=$_POST['ev_description'];
$event_array['ev_max_participants']=$_POST['ev_max_participants'];
$event_array['ev_participants']=$_POST['ev_participants'];
$event_array['ev_price']=$_POST['ev_price'];
$event_array['ev_nb_subscribed']=$_POST['ev_nb_subscribed'];
$event_array['ev_charged_member']=$_POST['user_list'];
$event_array['ev_com_linked']=$_POST['com_list'];

if(isset($_POST['is_attend'])&&$_POST['is_attend']==1)
{ 
	$event_array['ev_pk']=$_POST['ev_pk'];
	$event_array['participant']=$_POST['attender'];
	include '../DAL/event_profil_update_post_user_pk.php'; 
	include '../DAL/insert_participant.php'; 
}
else
{ include '../DAL/event_profil_update_var.php'; }

echo('
<html>
<head>

</head>
	<body>
		<form id="pk" method="POST" name="pk" action="../View/event_profil.php">
		  <input type="hidden" name="ev_pk" value="'.$_POST['ev_pk'].'" />
		</form>
		
		<script language="JavaScript">
			document.pk.submit();
		</script>
	</body>
</html>

');

?>