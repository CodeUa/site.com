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
<div style="color: #0184df; font-size:20px; font-weight:bold; text-align:center; margin-top:10px;">Спеціалізовані Інтернет-сайти дитячої літератури:</div></br>

<b><div style="margin-left: 30px;">Освітньо-інформаційні ресурси:</b></br></br>
<a href="http://teacher.at.ua/" style="color:blue;">http://teacher.at.ua/</a> - веб-сайт "Учитель учителю, учням та батькам"</br>
<a href="http://www.balachka.com" style="color:blue;">http://www.balachka.com </a> - веб-сайт "Пиши українською"</br>
<a href="http://biblijna-istoriya.org.ua/ " style="color:blue;">http://biblijna-istoriya.org.ua/ </a> - веб-сайт "Біблійна історія"</br>
<a href="http://cikave.org.ua/pro-sajt/" style="color:blue;">http://cikave.org.ua/pro-sajt/</a>  - веб-сайт "Цікаво про цікаве"</br>
<a href="http://www.ukr-tur.narod.ru/" style="color:blue;">http://www.ukr-tur.narod.ru/ </a> - веб-сайт "Світ географії та туризму"</br>
<a href="http://www.akBooks.com.ua" style="color:blue;">http://www.akBooks.com.ua </a> - веб-сайт "Академічна книгарня@онлайн"</br>
<a href="http://Icorp.ulif.org.ua " style="color:blue;">http://Icorp.ulif.org.ua </a> - український мовно-інформаційний фонд НАН України</br></br>

<b>"Словники України":</b></br></br>
<a href="http://www.idea-ukraine.org" style="color:blue;">http://www.idea-ukraine.org</a>  - проект "Відкритий світ інформаційних технологій"</br></br>


<b>Інтернет-сайти бібліотек та електронних бібліотек:</b></br></br>
<a href="http://www.4uth.gov.ua/" style="color:blue;">http://www.4uth.gov.ua/</a>  - веб-сайти Державної бібліотеки України для юнацтва (Київ)</br>
<a href="http://www.chl.kiev.ua/" style="color:blue;">http://www.chl.kiev.ua/</a> - веб-сайт Національної бібліотеки України для дітей</br>
<a href="http://www.nbuv.gov.ua/" style="color:blue;">http://www.nbuv.gov.ua/</a>  - веб-сайт Національної бібліотеки України імені В.І. Вернадського (Київ)</br>
<a href="http://www.bukvoid.com.ua/" style="color:blue;">http://www.bukvoid.com.ua/ </a> - веб-сайт "Буквоїд"</br>
<a href="http://www.nplu.org/ " style="color:blue;">http://www.nplu.org/ </a> - веб-сайт Національної парламентської бібліотеки України (Київ)</br>
<a href="http://ukrbook.net/" style="color:blue;">http://ukrbook.net/</a> - веб-сайт Книжкової палати України імені Івана Федорова (Київ)</br>
<a href="http://library.zntu.edu.ua/res-libr-el.html " style="color:blue;">http://library.zntu.edu.ua/res-libr-el.html </a> - веб-сайт "Бібліотеки в мережі Internet"</br>
<a href="http://book.uraic.ru/ssylki//biblioteki " style="color:blue;">http://book.uraic.ru/ssylki//biblioteki </a> - Інформаційно-довідковий портал "Library.ru"</br>
<a href="http://www.loc.gov/" style="color:blue;">http://www.loc.gov/ </a> - веб-сайт Бібліотеки Конгресу США</br></br>


<b>Інтернет-сайти музеїв та картинних галерей України:</b></br></br>
<a href="http://www.prostir.museym/sites/ua" style="color:blue;">http://www.prostir.museym/sites/ua </a> - веб-сайт "Музейний простір України"</br>
<a href="http://namu.kiev.ua/" style="color:blue;">http://namu.kiev.ua/ </a> - веб-сайт Національного художнього музею України</br>
<a href="http://www.warmuseum.kiev.ua/" style="color:blue;">http://www.warmuseum.kiev.ua/ </a> - веб-сайт Національного музею історії Великої Вітчизняної війни 1941-1945 років</br>
<a href="http://hutsul.museum/" style="color:blue;">http://hutsul.museum/</a>  - веб-сайт Національного музею народного мистецтва Гуцульщини та Покуття</br>
<a href="http://museum.odessa.net/fineartsmuseum/" style="color:blue;">http://museum.odessa.net/fineartsmuseum/ </a> - веб-сайт Одеського художнього музею</br>
<a href="http://www.archaeology.odessa.ua/ " style="color:blue;">http://www.archaeology.odessa.ua/ </a> - веб-сайт Одеського державного археологічного музею</br>
<a href="http://www.oweamuseum.odessa.ua/" style="color:blue;">http://www.oweamuseum.odessa.ua/</a>  - веб-сайт Одеського музею західного і східного мистецтва</br>
<a href="http://lvivgallery.org/" style="color:blue;">http://lvivgallery.org/ </a> - веб-сайт Львівської національної галереї мистецтв</br>
<a href="http://honchar.org.ua/" style="color:blue;">http://honchar.org.ua/</a> - веб-сайт Музею І.М. Гончара</br>
<a href="http://www.chersonesos.org/" style="color:blue;">http://www.chersonesos.org/</a>  - веб-сайт Національного заповідника "Херсонес Таврійський"</br>
<a href="http://www.tmf-museum.kiev.ua/" style="color:blue;">http://www.tmf-museum.kiev.ua/</a>  - веб-сайт Музею театрального, музичного і кіномистецтва України</br></br>

<b>Інтернет-сайти світових музеїв та картинних галерей:</b></br></br>
<a href="http://poklonnayagora.ru/" style="color:blue;">http://poklonnayagora.ru/ </a> - веб-сайт Центрального музею Великої Вітчизняної війни 1941-1945 рр. (Росія)</br>
<a href="http://www.muar.ru/" style="color:blue;">http://www.muar.ru/</a>  - веб-сайт Державного музею архітектури ім. А.В. Щусєва (Росія)</br>
<a href="http://www.spbmuseum.ru/ " style="color:blue;">http://www.spbmuseum.ru/ </a> - веб-сайт Державного музею історії Санкт-Петербурга</br>
<a href="http://www.vmdpni.ru/" style="color:blue;">http://www.vmdpni.ru/ </a> - веб-сайт Всеросійського музею декоративно-прикладного і народного мистецтва</br>
<a href="http://www/mmoma.ru/" style="color:blue;">http://www/mmoma.ru/</a>  - веб-сайт Московського сучасного мистецтва</br>
<a href="http://www.polotskmuzey.vitebsk.by/" style="color:blue;">http://www.polotskmuzey.vitebsk.by/ </a> - веб-сайт Національного Полоцького історико-культурного музею-заповідника (Білорусь)</br>
</div>

<?php echo '</div>'; 
require (BP.DS.'account'.DS.'calendar.php');
?>