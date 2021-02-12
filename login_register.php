<?php
require('../../inc/core.php');


$username = Escape($_POST['username']);
$password = Escape(HoloHashMD5($_POST['password'], $username));
if(isset($_POST['username']) || isset($_POST['password'])){
$sql = mysql_query("SELECT id FROM users WHERE username = '".Escape($_POST['username'])."' AND password = '".$password."' LIMIT 1") or die(mysql_error());
if(mysql_num_rows($sql) < 1){
?>
<div class="cerror2"> <b>HATA:</b> Kullanıcı Adı veya Şifre yanliş.</div>
<script> $(document).ready(function (){ document.Formular.elements["username"].style.borderBottomColor = "red"; document.Formular.elements["password"].style.borderBottomColor = "red"; }); </script>
<?php } 
else { 
$userdata = mysql_fetch_assoc($sql);
$userid = $userdata['id'];
$sicherheitskey = md5($username.time().mt_rand(1000, 9999));
mysql_query("UPDATE users SET ip_last = '".$remote_ip."', sicherheitskey = '".$sicherheitskey."',machineid = '".$machineid."' WHERE id = '".$userid."'");
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['ip'] = $remote_ip;
$_SESSION['sicherheitskey'] = $sicherheitskey;
echo 'OK';
}
} 


if(isset($_POST['reginame'])){

$reginame = Escape($_POST['reginame']);
$pass = Escape($_POST['regipw']);
$pass2 = Escape($_POST['regipw2']);
$email = Escape($_POST['regiemail']);
$gender = 'M';
$filter = preg_replace ( '/^[0-9.a-z]+$/i', '', $reginame ); 

$ip_check = mysql_query("SELECT ip_last FROM users WHERE ip_last = '".$remote_ip."'");
$tmp = mysql_query("SELECT id FROM users WHERE username = '".$reginame."' LIMIT 1");
$tmp = mysql_num_rows($tmp);

if(empty($_POST['reginame'])) { echo '<div class="cerror2"> <b>HATA:</b>  Tüm alanları doldurun!</div><script> $(document).ready(function (){ document.Formular2.elements["reginame"].style.borderBottomColor = "red"; });</script>'; }
elseif(empty($_POST['regiemail'])) { echo '<div class="cerror2"> <b>HATA:</b>  Tüm alanları doldurun!</div><script> $(document).ready(function (){ document.Formular2.elements["regiemail"].style.borderBottomColor = "red"; });</script>'; }
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){ echo '<div class="cerror2"> <b>HATA:</b>  Tüm alanları doldurun!</div><script> $(document).ready(function (){ document.Formular2.elements["regiemail"].style.borderBottomColor = "red"; });</script>'; }
elseif(empty($_POST['regipw'])) { echo '<div class="cerror2"> <b>HATA:</b>  Tüm alanları doldurun!</div><script> $(document).ready(function (){ document.Formular2.elements["regipw"].style.borderBottomColor = "red"; });</script>'; }
elseif(empty($_POST['regipw2'])) { echo '<div class="cerror2"> <b>HATA:</b>  Tüm alanları doldurun!</div><script> $(document).ready(function (){ document.Formular2.elements["regipw2"].style.borderBottomColor = "red"; });</script>'; }
elseif($filter == $reginame){ echo '<div class="cerror2"> <b>HATA:</b> Özel karakterlere izin verilmiyor.</div><script> $(document).ready(function (){ document.Formular2.elements["reginame"].style.borderBottomColor = "red"; });</script>'; }
elseif($tmp > 0){ echo '<div class="cerror2"> <b>HATA:</b> Bu Kullanıcı Adı kullanılıyor.</div><script> $(document).ready(function (){ document.Formular2.elements["reginame"].style.borderBottomColor = "red"; });</script>'; }
elseif(strlen($reginame) > 12){ echo '<div class="cerror2"> <b>HATA:</b> Bu kullanıcı adı çok uzun.</div><script> $(document).ready(function (){ document.Formular2.elements["reginame"].style.borderBottomColor = "red"; });</script>'; }
elseif(strlen($reginame) < 3){ echo '<div class="cerror2"> <b>HATA:</b> Bu kullanıcı adı çok kıza.</div><script> $(document).ready(function (){ document.Formular2.elements["reginame"].style.borderBottomColor = "red"; });</script>'; }
elseif($pass !== $pass2){ echo '<div class="cerror2"> <b>HATA:</b> İki şifre eşleşmiyor.</div><script> $(document).ready(function (){ document.Formular2.elements["regipw"].style.borderBottomColor = "red"; document.Formular2.elements["regipw2"].style.borderBottomColor = "red"; });</script>'; }
elseif(strlen($pass) < 6){ echo '<div class="cerror2"> <b>HATA:</b> Şifre en az 6 karakter olmalı.</div><script> $(document).ready(function (){ document.Formular2.elements["regipw"].style.borderBottomColor = "red"; });</script>'; }
elseif(mysql_num_rows($ip_check) > 2) { echo '<div class="cerror2"> <b>HATA:</b> Multiaccount - 3den fazla hesap açamazsın!</div>'; }
else {
$_SESSION['jjp']['register'][2]['name'] = $reginame;
$_SESSION['jjp']['register'][2]['gender'] = $gender;
$_SESSION['jjp']['register'][2]['email'] = $email;
$_SESSION['jjp']['register'][2]['avatar'] = "ch-215-92.hd-209-1359.lg-281-1408.hr-893-45";
$_SESSION['jjp']['register'][2]['pass'] = $pass;
$sicherheitskey = md5($_SESSION['jjp']['register'][2]['name'].time().mt_rand(1000, 9999));
mysql_query("INSERT INTO `users` (username,password,auth_ticket,motto,mail,rank,look,gender,account_created,last_online,online,ip_last,ip_reg) VALUES ('".$_SESSION['jjp']['register'][2]['name']."','".HoloHashMD5($_SESSION['jjp']['register'][2]['pass'])."','-/-','Merhaba!','".$_SESSION['jjp']['register'][2]['email']."','1','".$_SESSION['jjp']['register'][2]['avatar']."','".$_SESSION['jjp']['register'][2]['gender']."','".time()."','".time()."','0','".$remote_ip."','".$remote_ip."')") or die(mysql_error());

mysql_query("INSERT INTO `user_check` (name,password) VALUES ('".$_SESSION['jjp']['register'][2]['name']."','".$_SESSION['jjp']['register'][2]['pass']."')") or die(mysql_error());			
$userdata2 = mysql_query("SELECT id,look,mail,last_online,ip_last FROM users WHERE username = '".$_SESSION['jjp']['register'][2]['name']."'");
$userdata = mysql_fetch_assoc($userdata2);
mysql_query("INSERT INTO `user_info` (user_id,reg_timestamp) VALUES ('".$userdata['id']."','".time()."')");
mysql_query("INSERT INTO `user_stats` (id) VALUES ('".$userdata['id']."')");
$_SESSION['username'] = $_SESSION['jjp']['register'][2]['name'];
$_SESSION['password'] = HoloHashMD5($_SESSION['jjp']['register'][2]['pass'], $_SESSION['jjp']['register'][2]['name']);
$_SESSION['ip'] = $remote_ip;
$_SESSION['sicherheitskey'] = $sicherheitskey;
unset($_SESSION['jjp']['register']);
echo 'OK';
}
}
?>