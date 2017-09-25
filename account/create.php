<?php require ('..'.DIRECTORY_SEPARATOR.'init.php');
require (BP.DS.'account'.DS.'fullHeader.php') ; 
	
if (isLoggedIn())
{	
	echo "<div class='clearfix'>";
		require (BP.DS.'account'.DS.'dataUsers.php');

	echo "</div>";
	
}else
{
	require(BP.DS.'blocks'.DS.'createForm.phtml');
}