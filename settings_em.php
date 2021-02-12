<?php
require('./inc/core.php');
require('./inc/session.php');
$title = "Ayarlar";
$homepage = "startseite";
?>

<html>
    <head>
		<?php require ('./mytempl/head.php'); ?>
			<link rel="stylesheet" href="/web/css/staff.css?hhshdda">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    </head>
	<script type='text/javascript'>
function gegenteilswert(name){
 if($('input:radio[name=' + name + ']:checked').val() == 1){
  return 0;	
 }
 return 1;	
}

function mySettings() {
	var friends;
	var tauschen;
	var roomvisit;

	friends = gegenteilswert('friends');
	tauschen = $('input:radio[name=tauschen]:checked').val();
	roomvisit = $('input:radio[name=roomvisit]:checked').val();
	
    $.ajax({
      type: "POST",
      url: './inc/klassen/settingschange.php',
      data: { "friends":friends, "tauschen":tauschen, "roomvisit":roomvisit }
    });
 }
 
//MAIL SETTINGS

 function myEmail() {
	var email;
	email = $('input[name=email]').val();
      $.ajax({
           type: "POST",
           url: './inc/klassen/settingschange2.php',
		   success: function(result){
        $("#settingausgabe").html(result);
    },
           data: { "email":email }
		   
      });
 } 
 
 function myemailchange(email){
			var xmlHttp = null;
			// Mozilla, Opera, Safari sowie Internet Explorer 7
			if (typeof XMLHttpRequest != 'undefined') {
				xmlHttp = new XMLHttpRequest();
			}
			if (!xmlHttp) {
				// Internet Explorer 6 und älter
				try {
					xmlHttp  = new ActiveXObject("Msxml2.XMLHTTP");
				} catch(e) {
					try {
						xmlHttp  = new ActiveXObject("Microsoft.XMLHTTP");
					} catch(e) {
						xmlHttp  = null;
					}
				}
			}
			// Wenn das Objekt erfolgreich erzeugt wurde	
			
			if (xmlHttp) {
				var url = "./inc/klassen/ajax_settingcheck.php";
				var params = "email="+email;
				
				xmlHttp.open("POST", url, true);
				
				//Headerinformationen für den POST Request
				xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlHttp.setRequestHeader("Content-length", params.length);
				xmlHttp.setRequestHeader("Connection", "close");					
			
				xmlHttp.onreadystatechange = function () {
					if (xmlHttp.readyState == 3 && xmlHttp.status == 200) {
						// Zurückgeliefertes Ergebnis wird in den DIV "ergebnis" geschrieben
						document.getElementById("ergebnis3").innerHTML = xmlHttp.responseText;
					}
				};				
				xmlHttp.send(params);
			}	
		}
 
 //PASSWORD SETTINGS
 function myPassword() {
	var passwort;
	var passwort2;
	passwort = $('input:password[name=passwort]').val();
	passwort2 = $('input:password[name=passwort2]').val();
      $.ajax({
           type: "POST",
           url: './inc/klassen/settingschange2.php',
		   success: function(result){
        $("#settingausgabe").html(result);
    },
           data: { "passwort":passwort, "passwort2":passwort2 }
		   
      });
 }
 
		function mypasswordchange(passwort){
			var xmlHttp = null;
			// Mozilla, Opera, Safari sowie Internet Explorer 7
			if (typeof XMLHttpRequest != 'undefined') {
				xmlHttp = new XMLHttpRequest();
			}
			if (!xmlHttp) {
				// Internet Explorer 6 und älter
				try {
					xmlHttp  = new ActiveXObject("Msxml2.XMLHTTP");
				} catch(e) {
					try {
						xmlHttp  = new ActiveXObject("Microsoft.XMLHTTP");
					} catch(e) {
						xmlHttp  = null;
					}
				}
			}
			// Wenn das Objekt erfolgreich erzeugt wurde	
			
			if (xmlHttp) {
				var url = "./inc/klassen/ajax_settingcheck.php";
				var params = "passwort="+passwort;
				
				xmlHttp.open("POST", url, true);
				
				//Headerinformationen für den POST Request
				xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlHttp.setRequestHeader("Content-length", params.length);
				xmlHttp.setRequestHeader("Connection", "close");					
			
				xmlHttp.onreadystatechange = function () {
					if (xmlHttp.readyState == 3 && xmlHttp.status == 200) {
						// Zurückgeliefertes Ergebnis wird in den DIV "ergebnis" geschrieben
						document.getElementById("ergebnis2").innerHTML = xmlHttp.responseText;
					}
				};				
				xmlHttp.send(params);
			}	
		}



 // MOTTOCHANGE
 
 function myMotto() {
	var motto;
	motto = $('input:text[name=motto]').val();
      $.ajax({
           type: "POST",
           url: './inc/klassen/settingschange2.php',
		   success: function(result){
        $("#settingausgabe").html(result);
    },
           data: { "motto":motto }
		   
      });
 }
		function mymottochange(motto){
			var xmlHttp = null;
			// Mozilla, Opera, Safari sowie Internet Explorer 7
			if (typeof XMLHttpRequest != 'undefined') {
				xmlHttp = new XMLHttpRequest();
			}
			if (!xmlHttp) {
				// Internet Explorer 6 und älter
				try {
					xmlHttp  = new ActiveXObject("Msxml2.XMLHTTP");
				} catch(e) {
					try {
						xmlHttp  = new ActiveXObject("Microsoft.XMLHTTP");
					} catch(e) {
						xmlHttp  = null;
					}
				}
			}
			// Wenn das Objekt erfolgreich erzeugt wurde	
			
			if (xmlHttp) {
				var url = "./inc/klassen/ajax_settingcheck.php";
				var params = "motto="+motto;
				
				xmlHttp.open("POST", url, true);
				
				//Headerinformationen für den POST Request
				xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlHttp.setRequestHeader("Content-length", params.length);
				xmlHttp.setRequestHeader("Connection", "close");					
			
				xmlHttp.onreadystatechange = function () {
					if (xmlHttp.readyState == 3 && xmlHttp.status == 200) {
						// Zurückgeliefertes Ergebnis wird in den DIV "ergebnis" geschrieben
						document.getElementById("ergebnis").innerHTML = xmlHttp.responseText;
					}
				};				
				xmlHttp.send(params);
			}	
		}
		
		$(document).ready(function(){

$("#change_mt").click(function(){
$("#more_settings").hide();
$(".my_motto").fadeIn(500);
});

$("#change_pw").click(function(){
$("#more_settings").hide();
$(".my_password").fadeIn(500);
});

$("#change_mail").click(function(){
$("#more_settings").hide();
$(".my_email").fadeIn(500);
});

$(".goback").click(function(){
$(".my_email").hide();
$(".my_password").hide();
$(".my_motto").hide();
$(".more_settings").fadeIn(500);
});


});
</script>
    <body>
       		<?php require ('./mytempl/header.php'); ?>
            </div>
					<div id="settingausgabe"></div>

        </div>
        <div id="wrapper">
                        <div id="layout_left">
                <div class="box">
                    <div class="box_title">Veri Ayarlar</div>
                    <div class="padding">
                        <a href="settings_pw">Sifre Degis</a><br>
                        <b>E-Mail Degis</b><br>
                                            </div>
                </div>
            </div>
            <div id="layout_right">
                <div class="box">
                    <div class="box_title">Eposta-Adresi Ayarlari</div>
                        <div class="padding">
                        <form action="" method="post">
                            <div class="text_fat">Email Adresi:</div>
                            <input name="email2" type="email" class="inputfield" style="width:100%; opacity: 0.7;" value="<?php echo $myrow['mail']; ?>" disabled><br>
                            <div class="text_thick">E-Mail Adresim!</div>
                            <div class="text_fat">Sifre:</div>
                            <input name="email" type="email" class="inputfield" onkeyup="myemailchange(this.value);" style="width:100%;" required><br>
                            <div class="text_thick">Sifre</div>
                            <button name="save" type="submit" class="submit green" style="float:right">E-Mail Degistir</button>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="large_spacer"></div>
            <div class="footer">
                <div class="padding">
                    <center class="footertext">
<?php require ('/mytempl/footer.php'); ?>
                </div>
            </div>
        </div>
    </body>
</html>