<?php
require('../core.php');

$motto = mysql_escape_string($_POST['motto']);
if(isset($_POST['motto'])) {
if(strlen($motto) > 1) {
if(strlen($motto) < 25) {
mysql_query("UPDATE users SET motto = '".Escape($_POST['motto'])."' WHERE username = '".$myrow['username']."'");
$core->MUS('updatemotto', $userid); 
echo '<div id="erfolg" class="fadein">Slogan değişti!</div>';
echo '<script> $(document).ready(function(){ $("#erfolg").fadeOut(10000); }); </script>';
}
}
}

if(isset($_POST['passwort'])) {
$pass1 = Escape($_POST['passwort']);
$pass1_hash = HoloHashMD5($pass1, $myrow['username']);
$newpass = Escape($_POST['passwort2']);
$newpass_hash = HoloHashMD5($newpass, $rawname);
if($pass1_hash == $myrow['password']){
if(strlen($newpass) > 6){
mysql_query("UPDATE users SET password = '".$newpass_hash."' WHERE username = '".$rawname."' and password = '".$rawpass."'") or die(mysql_error());
echo '<div id="erfolg" class="fadein">Şifre değişti!</div>'; 
} else { echo '<div id="erfolg" style="background:darkred;"  class="fadein">Şifre çok kısa!</div>';  }
}
}

$email = mysql_escape_string($_POST['email']);
if(isset($_POST['email'])) {
if (eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)) { 
mysql_query("UPDATE users SET mail = '".Escape($_POST['email'])."' WHERE username = '".$myrow['username']."'");
echo '<div id="erfolg" class="fadein">E-posta adresi değişti!</div>';
echo '<script> $(document).ready(function(){ $("#erfolg").fadeOut(10000); }); </script>';
} else { echo '<div id="erfolg" style="background:darkred;"  class="fadein">E-posta adresi geçersiz!</div>';  }
}


?>