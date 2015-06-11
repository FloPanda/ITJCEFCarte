<?php	

//"892300000"

include '../Model/DataModel/commission_full_DM.php';

//$com_concerned=new commission_full($_POST['com_pk']);
$com_concerned=new commission_full("1"); //a virer et remettre la ligne du haut quand le post arrivera, la  c est du test


echo $com_concerned->com_pk;
echo $com_concerned->com_name;
echo $com_concerned->com_description;
echo $com_concerned->com_picture;




?>