<?php require ('init.php');?>
<!DOCTYPE html>
<html>
<head> 
<?php 
	require (BP.DS.'blocks'.DS.'fullHeader.php') ;  
?>
</head>
<body>
<?php 
if(isLoggedIn())
{
	require (BP.DS.'account'.DS.'dataUsers.php');	
	}
	else
{
		require (BP.DS.'blocks'.DS.'loginForm.phtml');
}
	require (BP.DS.'account'.DS.'content.php');
	require (BP.DS.'account'.DS.'calendar.php');
?> 
</body>
</html>