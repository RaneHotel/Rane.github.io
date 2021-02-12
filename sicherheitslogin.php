<?php
session_start();
if(isset($_SESSION['slogin'])) {
header("Location: ./home");
}
?>

<html>

<head>
<title>Kabbo :: Güvenlikgiris</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./web/css/main_css.css?dfd" />
<link rel="icon" type="image/png" href="/web/img/favicon.ico" />

</head>

<style>
body {
	background:url('bg.png');
}
</style>


<body>
<script type="text/javascript">
function SecGo() {
	var sec;
	sec = $('input[name=sec]').val();
      $.ajax({
           type: "POST",
           url: '/inc/klassen/sec_login.php',
		   success: function(result){
        $("#settingausgabe").html(result);
    },
           data: { "sec":sec }
		   
      });
 } 
 </script>
<div id="logo" style="margin:auto;position:relative;margin-bottom:-50px;"></div>
<div id="secbox">
<img src="/web/img/kabbostaff.png" style="float: left;margin-top: -23px;margin-bottom: -28px;margin-left: -22px;-webkit-filter: drop-shadow(0 1px 0 #D8D8D8) drop-shadow(0 -1px 0 #D8D8D8) drop-shadow(1px 0 0 #D8D8D8) drop-shadow(-1px 0 0 #D8D8D8);" />
<h3 class="staff_login">Kabbo PERSONEL</h3>
<input class="sec_input" type="password" placeholder="Güvenlik Sifre" name="sec" />
<input class="sec_submit" onclick="SecGo();" type="button" value="Giris"  />
</div>

<div id="settingausgabe"></div>
</body>

</html>