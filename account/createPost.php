<?php require('..'.DIRECTORY_SEPARATOR.'init.php');
if (isLoggedIn()) 
{
	header('Location: '.BASE_URL.'index.php');
	exit();
}

if(!empty($_POST['name']) 
	&& !empty($_POST['surname']) 
	&& !empty($_POST['email']) 
	&& !empty($_POST['login']) 
	&& !empty($_POST['birth']) 
	&& !empty($_POST['passwordout']) 
	&& !empty($_POST['password2']))
{
	if($_POST['passwordout'] == $_POST['password2'])
	{
		push_user_by_reg_data(
			$_POST['login'],
			$_POST['passwordout'],
			$_POST['email'],
			$_POST['name'],
			$_POST['surname'],
			$_POST['birth'],
			$_POST['sex1']);
		$user = get_user_by_aug($_POST['login'],$_POST['passwordout']);
		if($user){
			ses_user($user);
			setMessage("Реєстрація пройшла успішно");
		 	header('Location: '.BASE_URL.'index.php');
			exit();	
		}
	}
	else
	{	setMessage("<div class='session'>Паролі не співпадають<div>");
		header('Location: '.BASE_URL.'create.php');
	}
}
	else
	{	setMessage("<div class='session'>Не всі поля заповнені<div>");
		header('Location: '.BASE_URL.'create.php');
	}

?>
