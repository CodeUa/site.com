<?php
require ('..'.DIRECTORY_SEPARATOR.'init.php');
require (BP.DS.'blocks'.DS.'fullHeader.php') ; 

if(isLoggedIn())
{
	require (BP.DS.'account'.DS.'dataUsers.php');	
	}
	else
{
		require (BP.DS.'blocks'.DS.'loginForm.phtml');
}
echo '<div id="content" class="mysize">';?>
<?php  echo get_news();?>
<?php echo '</div>'; 
		require (BP.DS.'account'.DS.'calendar.php');
?>