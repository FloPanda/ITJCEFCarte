<?php	

include '../Model/ViewModel/user_list_full.php';

$user_list=new user_list_full();
$member_list= array();
$pengyou_list= array();
$user_count=0;

$member_count=0;
$pengyou_count=0;

foreach($user_list->user_list as $value)
{	
	if(($_POST['user_date_1']<=$value->user_subscription_date)&&($value->user_subscription_date<=$_POST['user_date_2']))
	{
		//member type
		if($value->user_member_type==1)
		{
			$member_count++;
			array_push($member_list,$value);
		}
		else if($value->user_member_type==2)
		{
			$pengyou_count++;
			array_push($pengyou_list,$value);
		}
	}

}

echo('
<h1>Statistiques membres:</h1></br></br>
Du '.$_POST['user_date_1'].' au '.$_POST['user_date_2'].' :</br>

- '.$member_count.' membres ajoutés:</br>');
if(isset($member_list[0])){foreach($member_list as $value2)
{	
echo($value2->user_name.' '.$value2->user_surname.' le '.$value2->user_subscription_date.'</br>');
}}

echo('- '.$pengyou_count.' pengyous ajoutés</br>');
if(isset($pengyou_list[0])){foreach($pengyou_list as $value3)
{	
echo($value3->user_name.' '.$value3->user_surname.' le '.$value3->user_subscription_date.'</br>');
}}

?>