<?php

if($_POST['user_user_type']==1)
{
	$is_admin=1;
}
else
{
	$is_admin=2;
}
include '..\DAL\user_droits_edit.php';

echo '<meta http-equiv="refresh" content="0; URL=..\View\gestion_droits.php">';

?>
