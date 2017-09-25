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
<div style="color: #800000; font-size: 20px; text-align: center; margin-top: 30px;">Козівська державна українська гімназія ім. В.Герети - Освітній Дім, де панують</br> Високі Думки, Віра, Надія, Любов і Злагода</div></br>
<iframe allowfullscreen="" src="//www.youtube.com/embed/JzASsp9W9LE?rel=0" width="400" height="300" frameborder="0" class="iframe"></iframe>
<img src="<?php echo BASE_URL.'img'.DS.'axe.jpg'; ?>" width="500" height="330" class="umage"></br>
<div class="manage_text">Дата заснування - 13 вересня 1992 рік</br>
 

Кількість класів - 14</br>
 

Кількість учнів - 314</br>
 

Форма навчання - модульно-розвивальна</br>
 

Система оцінювання - 12-ти бальна</br></div>
<hr>
  	 
 

<div class="manage_text"><b>Проблемне питання:</b> Система роботи гімназії по самореалізації творчої особистості.</br>

<b>Проблемне питання методичної роботи: </b>Система роботи гімназії по впровадженню новітніх та інноваційних технологій</br></br>

<b>Способи пізнання Смислу Всесвіту </b>- Наука, Релігія, Мистецтво</br>

<b>Основна структура методичної роботи </b>- предметні кафедри</br></div>
<hr>

<div class="manage_text" style="color: #800000; text-align:center;">НАШІ ІДЕАЛИ - БОГ, УКРАЇНА, НАЦІЯ </div>
<?php echo '</div>'; 
	require (BP.DS.'account'.DS.'calendar.php');
?>