<?php
function get_db_connect()
{
	GLOBAL $db_connect;	
		if(!isset($db_connect))
		{
			$db_connect = mysqli_connect("localhost", DB_LOGIN, DB_PASSWORD, "login");
		}
return $db_connect;
}
function get_user_by_aug($login,$password)
{	
	$city = mysqli_real_escape_string(get_db_connect(), $_POST['login']);
	$stmt= mysqli_query(get_db_connect(),'SELECT * FROM `users` WHERE `login`="'.$city.'" AND `password`="'.md5($password).'"');
	return mysqli_fetch_assoc($stmt);
}

// function get_head_news(){
// 	get_db_connect()->set_charset("utf8");
// 	$stmt = mysqli_query(get_db_connect(),'SELECT `full_description`,`image` FROM `head_news` ORDER BY id  DESC limit 0,3');
// 	echo "<table><tr>";
// 	while($res = mysqli_fetch_assoc($stmt)) {
// 		 $string = substr($res['full_description'],0,30);
// 		echo '<td><img src="data://image/jpeg;base64,'.base64_encode($res['image']).'" style="width:150px; height:150px; margin-left:30px; border:2px solid #eaeaea; webkit-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
// -moz-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
// box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75); border-radius: 2px;" ></br>'.'<div style="margin-top:15px; font-weight:bold; text-align:center;">'.$string."</div></td>";
// 	}
// 	echo "</table></tr>";
// }
function get_full_description2(){
	get_db_connect()->set_charset("utf8");
	$stmt = mysqli_query(get_db_connect(),'SELECT `full_description`,`image` FROM `News` ORDER BY id  DESC');
	echo "<table><tr>";
	while($res = mysqli_fetch_assoc($stmt)) {
		 $string = substr($res['full_description'],0,30);
		echo '<td><img src="data://image/jpeg;base64,'.base64_encode($res['image']).'" style="width:150px; height:150px; margin-left:30px; margin-top:40px; border:2px solid #eaeaea; webkit-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75); border-radius: 2px;" ></br>'.'<div style="margin-top:15px; font-weight:bold; text-align:center;">'.$string."</div></td>";
	}
	echo "</table></tr>";
}

function get_news(){
	get_db_connect()->set_charset("utf8");
	$stmt = mysqli_query(get_db_connect(),'SELECT * FROM `News` ORDER BY id  DESC ');
	echo "<table>";
	while($res = mysqli_fetch_assoc($stmt)) {
		echo '<tr><td><img src="data://image/jpeg;base64,'.base64_encode($res['image']).'" style="width:250px; height:250px; margin:20px 25px; border:2px solid #eaeaea; webkit-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75);
		box-shadow: 4px 7px 21px 0px rgba(0,0,0,0.75); border-radius: 2px; float:left;"> '."<a href='#' class='link'>".$res['Theme']."</a></br></br>"."<div style=' padding:0 15px;'>".$res['full_description']."</div></br>"."</td></tr>";
	}
	new_page();	
	echo "</table>";
}
function new_page()
{
	if(isset($_SESSION['page']))
	{
		$fp = fopen($_SESSION['page'].".php", 'w');

	}
}


function selected_full_names(){
	return $_SESSION['user']['name']. ' ' . $_SESSION['user']['surname'];
}
function setMessage($message){
    $_SESSION['message']=$message;
}
function getMessage(){
	if (isset( $_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}
function ses_user($user)
{
	$_SESSION['user']= $user;
}
function isLoggedIn()	
{
  return isset($_SESSION['user']);
}

function push_user_by_reg_data($login,$password,$email,$name,$surname,$birth,$sex1)
{
	//$city = mysqli_real_escape_string(get_db_connect(), $_POST['login']);
	mysqli_query(get_db_connect(),'INSERT INTO `users` (`login`,`password`,`email`,`name`,`surname`,`birthday`,`sex1`) VALUES("'.$login.'","'.md5($password).'","'.$email.'","'.$name.'","'.$surname.'","'.$birth.'","'.$sex1.'")');
	//return mysqli_fetch_assoc($stmt);
}

function get_vipusk()
{	get_db_connect()->set_charset("utf8");
	$stmt= mysqli_query(get_db_connect(),'SELECT * FROM `alumnus`');
	echo "<table><tr>";
	while($image = mysqli_fetch_assoc($stmt)){
		
		echo '<td><img src="data://image/jpeg;base64,'.base64_encode($image['image']).'" class="fps" ></br><div class="ty">'.$image['title'].'</div></td>'; 
		
	}
	echo "</table></tr>";
}