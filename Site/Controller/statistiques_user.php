<?php	

include '../Model/ViewModel/user_list_full.php';
$user_list=new user_list_full();
$user_count=0;

$male_count=0;
$female_count=0;
$other_sex_account=0;

$member_count=0;
$pengyou_count=0;
$former_count=0;
$other_member_type_account=0;

foreach($user_list->user_list as $value)
{	
	$user_count++;

	//sexe
	if($value->user_sex=="m")
	{
		$male_count++;
	}
	else if($value->user_sex=="f")
	{
		$female_count++;
	}
	else
	{
		$other_sex_account++;
	}
	
	//member type
	if($value->user_member_type==1)
	{
		$member_count++;
	}
	else if($value->user_member_type==2)
	{
		$pengyou_count++;
	}
	else if($value->user_member_type==3)
	{
		$former_count++;
	}
	else 
	{
		$other_member_type_account++;
	}

}

echo('
<h1>Statistiques membres:</h1></br></br>

'.$user_count.' membres </br>
	dont: </br>- '.$male_count.' hommes ( soit  '.round(((100/$user_count)*$male_count),2).'% )</br>
		  - '.$female_count.' femmes ( soit  '.round(((100/$user_count)*$female_count),2).'% )</br>
		  - '.$other_sex_account.' autres ( soit  '.round(((100/$user_count)*$other_sex_account),2).'% )</br>
		  
</br>
</br>

Types de membres:</br>
		  - '.$member_count.' membres ( soit  '.round(((100/$user_count)*$member_count),2).'% )</br>
		  - '.$pengyou_count.' pengyous ( soit  '.round(((100/$user_count)*$pengyou_count),2).'% )</br>
		  - '.$former_count.' anciens membres ( soit  '.round(((100/$user_count)*$former_count),2).'% )</br>
		  - '.$other_member_type_account.' autres ( soit '.round(((100/$user_count)*$other_member_type_account),2).'% )</br>




');
?>