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

echo '<div id="content" class="content_size">';?>
<div style="color: #800000; text-align: center; font-size: 20px; margin-top: 30px;">Розклад модулів</div>
<img src="<?php echo BASE_URL.'img'.DS.'зняток.png';?>" style="margin-left:150px; margin-top:20px;">
<?php echo '</div>';
require (BP.DS.'account'.DS.'calendar.php'); ?>