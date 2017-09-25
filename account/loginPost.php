<?php require('..'.DIRECTORY_SEPARATOR.'init.php');
if (isLoggedIn()) 
{
	header('Location: logo.php');
	exit();
}
	if(!empty($_POST['login']) && !empty($_POST['password']))
	{
		 $user=get_user_by_aug($_POST['login'],$_POST['password']);
		 	if($user)
		 	{
				ses_user($user);	
				header('Location: '.BASE_URL.'index.php');
				exit();
			}
			 else
			 {
				setMessage("<div class='session'>Невірно введені дані</div>");
				header('Location: '.BASE_URL.'index.php');
				exit();
			 }
	}else
	{
		setMessage("<div class='session'>Не всі поля заповнені</div>");
		header('Location: '.BASE_URL.'index.php');
		exit();
	}
?>