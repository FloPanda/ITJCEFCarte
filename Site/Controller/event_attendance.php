<!DOCTYPE html>
<html>

<?php	


include '..\Model\DataModel\event_full_DM.php';

$event_concerned=new event_full($_POST['ev_pk']);

$event_concerned->ev_participants=$event_concerned->ev_participants+1;

echo('
<html>
<head>

</head>
	<body>
		<form id="pk" method="POST" name="pk" action="../Controller/event_update.php">
			<input type="hidden" name="ev_pk" value="'.$event_concerned->ev_pk.'" />
			<input type="hidden" name="ev_picture" value="'.$event_concerned->ev_picture.'" />
			<input type="hidden" name="ev_address" value="'.$event_concerned->ev_address.'" />
			<input type="hidden" name="ev_date" value="'.$event_concerned->ev_date.'" />
			<input type="hidden" name="ev_description" value="'.$event_concerned->ev_description.'" />
			<input type="hidden" name="ev_max_participants" value="'.$event_concerned->ev_max_participants.'" />
			<input type="hidden" name="ev_participants" value="'.$event_concerned->ev_participants.'" />
			<input type="hidden" name="ev_price" value="'.$event_concerned->ev_price.'" />
			<input type="hidden" name="ev_nb_subscribed" value="'.$event_concerned->ev_nb_subscribed.'" />
			<input type="hidden" name="user_list" value="'.$event_concerned->ev_charged_member.'" /> 
			<input type="hidden" name="com_list" value="'.$event_concerned->ev_com_linked.'" />
			<input type="hidden" name="exist" value="'.$_POST['exist'].'" />
			<input type="hidden" name="attender" value="'.$_POST['user_uuid'].'" />
			<input type="hidden" name="is_participe" value=1 />
		</form>
		
		<script language="JavaScript">
			document.pk.submit();
		</script>
	</body>
</html>

');