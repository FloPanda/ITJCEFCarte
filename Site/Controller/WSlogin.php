<?php
// TODO : rendre fonctionnel
	include '../Model/DataModel/user_full_DM.php';
	include('../Model/ViewModel/user_list_login.php');
    $userslogin = new user_list_login();
    foreach($userslogin->user_list as $value)
    {
        if($_POST['user_uuid']==$value->user_uuid && $_POST['user_password']==$value->user_password)
        {
            $_SESSION['user_user_type'] = $value->user_user_type;
            $_SESSION['user_surname'] = $value->user_surname;
            $_SESSION['user_uuid'] = $value->user_uuid;
            $_SESSION['user_is_admin'] = $value->user_is_admin;
            $_SESSION['user_pk'] = $value->user_pk;
            header('Content-type: application/json');
            echo json_encode($value);
            //ob_end_clean();
            //break;
        }
        else
        {
            header("HTTP/1.1 401 Unauthorized");
        }
    }
?>