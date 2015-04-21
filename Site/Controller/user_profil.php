<?php	

//"892300000"

include '..\Model\DataModel\user_full_DM.php';

$user_concerned=new user_full(892300000);

echo $user_concerned->user_name;
echo $user_concerned->user_surname;
echo $user_concerned->user_is_admin;
echo $user_concerned->user_birth;
echo $user_concerned->user_sex;
echo $user_concerned->user_nation;
echo $user_concerned->user_user_type;
echo $user_concerned->user_member_type;
echo $user_concerned->user_jcef_function;
echo $user_concerned->user_status;
echo $user_concerned->user_company;
echo $user_concerned->user_company_title;
echo $user_concerned->user_cell_phone;
echo $user_concerned->user_land_phone;
echo $user_concerned->user_subscription_date;
echo $user_concerned->user_renew_date;
echo $user_concerned->user_last_amount;
echo $user_concerned->user_picture;
echo $user_concerned->user_uuid;
echo $user_concerned->user_password;
echo $user_concerned->user_email_jcef;
echo $user_concerned->user_email_company;
echo $user_concerned->user_email_perso;
echo $user_concerned->user_weixin;
echo $user_concerned->user_skype;
echo $user_concerned->user_qr_code_url;
echo $user_concerned->user_address;
echo $user_concerned->user_comment;



?>