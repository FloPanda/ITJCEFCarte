<?php
	$username="hoeffel";
	$password="azerty1234";

	require ('../DAL/sql_connect.php');
	

	if (isset($_POST['submit']))
	{
		$username="hoeffel";
		$password="azerty1234";
		if(!$_POST['uname'] | !$_POST['pass'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				localStorage.removeItem('username')
				window.alert('You did not complete all the required fields.')
				window.location.href='../View/login.html'
				</SCRIPT>");
			exit();
		}

	}

$result = mysqli_query($link,"SELECT * FROM user WHERE 'user_name' LIKE $username");

if($result === FALSE) { 
    echo("fzziuhueifhfeziufh");
}


else { 
    $sql=mysqli_query($link,"SELECT * FROM user WHERE user_name = $username AND user_password =$password");

	while($row = mysql_fetch_array($sql))
	{
	   if($row['user_name']=$username & $row['user_password']='$password')
	   {
	   		echo ("<SCRIPT LANGUAGE='JavaScript'>
	   		localStorage.setItem('username','$username')
			window.alert(localStorage.username+', Login Succesfull!')
			window.location.href='../View/login.html'
			</SCRIPT>");
			//exit();
	   }
	}

	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username/password combination. Please re-enter.')
		window.location.href='../View/login.html'
		</SCRIPT>");
}


	


?>