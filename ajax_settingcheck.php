<?php
require('../core.php');

$motto = $_POST['motto'];
$password = $_POST['passwort'];
$email = $_POST['email'];

if(isset($motto)) {
	$motto_input = '<input type="button" class="submit" id="changemymotto" style="opacity:0.5" value="Sloganini degistir" disabled />';
	if(strlen($motto) > 1) {
	if(strlen($motto) < 25) {
		echo '<input type="button" class="submit" onclick="myMotto();" id="changemymotto" value="Sloganini degistir" />';
	} else { echo $motto_input; }
	} else { echo $motto_input; }
}

if(isset($password)) {
	$pass1 = Escape($_POST['passwort']);
	$pass1_hash = HoloHashMD5($pass1, $myrow['username']);
	$password_input = '<input name="passwort2" type="password" class="inputfield" style="width:100%;" required disabled><br>
	 <div class="text_thick">Yeni sectigin sifreni gir ve kaydet!</div>
	 <button type="button" name="save" type="submit" onclick="myPassword();" class="submit green" style="float:right; opacity: 0.6;" disabled>Password Degistir</button>
	';
	if($pass1_hash == $myrow['password']){
		echo '<input name="passwort2" type="password" class="inputfield" style="width:100%;" required ><br>
	 <div class="text_thick">Yeni sectigin sifreni gir ve kaydet!</div>
	 <button type="button" name="save" type="submit" onclick="myPassword();" class="submit green" style="float:right;" >Password Degistir</button>';
	} else { echo $password_input; }
}

if(isset($email)) {
	$email_input = '<input type="button" class="submit" style="opacity:0.5" value="Eposta-Adresini degistir" disabled />';
		if (eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)) { 
		echo '<input type="button" class="submit" onclick="myEmail();" value="Eposta-Adresini degistir" />';
	} else { echo $email_input; }
}


?>
