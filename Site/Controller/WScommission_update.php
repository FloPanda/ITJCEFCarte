<?php
// if var required
$com_array=null;

$com_array['com_name']=$_POST['com_name'];
$com_array['com_description']=$_POST['com_description'];
$com_array['com_picture']="../Ressources/Images/".$_POST['com_picture'];
$com_array['com_is_open']=$_POST['com_is_open'];

include '../DAL/commission_profil_update_var.php';

echo(json_encode($com_array['com_pk']));

?>