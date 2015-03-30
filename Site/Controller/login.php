<?php
	$username="hoeffel";
	$password="azerty1234";
	require ('sql_connect.php');
	if (isset($_POST['submit']))
	{
		$username=mysql_escape_string($_POST['uname']);
		$password=mysql_escape_string($_POST['pass']);
		if(!$_POST['uname'] | !$_POST['pass'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				localStorage.removeItem('username')
				window.alert('You did not complete all the required fields.')
				window.location.href='index.php'
				</SCRIPT>");
			exit();
		}

	}

$sql=mysql_query("SELECT * FROM user WHERE user_name = '$username' AND user_password ='$password'");

while($row = mysql_fetch_array($sql))
{
   if($row['user_name']=$username & $row['user_password']='$password')
   {
   		echo ("<SCRIPT LANGUAGE='JavaScript'>
   		localStorage.setItem('username','$username')
		window.alert(localStorage.username+'Login Succesfull!')
		window.location.href='index.php'
		</SCRIPT>");
		exit();
   }
}

//if(mysql_num_rows($sql)  > 1)
//{


//}

	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username/password combination. Please re-enter.')
		window.location.href='index.php'
		</SCRIPT>");


?>