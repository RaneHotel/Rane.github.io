<?php 
$sec_check = '1';
 require('./inc/core.php');
 require('./inc/session.php');

 $mystats = mysql_fetch_assoc(mysql_query("SELECT * FROM user_stats WHERE id = '".$myrow['id']."' "));
$title = "Kabbo :: $username";
?>
<html>
    <head>
		<?php require ('./mytempl/head.php'); ?>

    </head>
	
	<style>
	div#habbowood {
    background-image: url(/gallery/images/moviemagic_background_right.png);
    position: fixed;
    width: 887px;
    height: 638px;
    bottom: 0px;
    right: 0px;
    opacity: 0.5;
    z-index: -1;
}
	.homebutton {
    width: 200px;
    text-align: center;
    color: white;
    background-image: linear-gradient(to top,#30A03E,#3CB846);
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    position: absolute;
    box-shadow: 0px 6px 5px rgba(0, 0, 0, 0.1);
    top: 55px;
    right: 50px;
    transition: 200ms;
    cursor: pointer;
    height: 50px;
    font-size: 22px;
    border-radius: 5px;
    line-height: 50px;
	
  }
  .homebutton:hover {
	  opacity: 0.8;
  }
  #myframe{
  animation: avaframe ease 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  animation-fill-mode:forwards; /*when the spec is finished*/
  -webkit-animation: avaframe ease 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
  -moz-animation: avaframe ease 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -moz-animation-fill-mode:forwards; /*FF 5+*/
  -o-animation: avaframe ease 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -o-animation-fill-mode:forwards; /*Not implemented yet*/
  -ms-animation: avaframe ease 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
  -ms-animation-fill-mode:forwards; /*IE 10+*/
}

@keyframes avaframe{
  0% {
    opacity:0;
    transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes avaframe{
  0% {
    opacity:0;
    -moz-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes avaframe {
  0% {
    opacity:0;
    -webkit-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes avaframe {
  0% {
    opacity:0;
    -o-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  ;
  }
}
.creditbox {
 /* position: absolute; */
    bottom: 0px;
    padding: 8px 0px;
    text-align: center;
    width: 100%;
  /*  border-radius: 0px 0px 5px 0px; */
    background-color: rgba(0, 0, 0, 0.46);
    border-top: 1px solid rgba(252, 252, 252, 0.55);
}
div#homebox {
    background-image: url(/gallery/images/xmas_box_violet.gif);
    position: absolute;
    width: 68px;
    left: 291px;
    background-repeat: no-repeat;
    height: 67px;
    top: -55px;
    opacity: 0.6;
    -webkit-filter: drop-shadow(0 1px 0 #ffffff) drop-shadow(0 -1px 0 #909090) drop-shadow(1px 0 0 #909090) drop-shadow(-1px 0 0 #ffffff) drop-shadow(0 0 10px rgba(255, 255, 255, 0.6));
}
div#homebox:hover {
    opacity: 1;
}
.userlevel {
    background-image: url(/gallery/images/xmas_box_violet.gif);
    position: absolute;
    width: 68px;
    left: 291px;
    background-repeat: no-repeat;
    height: 67px;
    top: -55px;
    opacity: 0.6;
    -webkit-filter: drop-shadow(0 1px 0 #ffffff) drop-shadow(0 -1px 0 #909090) drop-shadow(1px 0 0 #909090) drop-shadow(-1px 0 0 #ffffff) drop-shadow(0 0 10px rgba(255, 255, 255, 0.6));
}
.topmenu {
background-image: url(https://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $myrow['look']; ?>&action=std&gesture=sml&direction=2&head_direction=2&size=n&img_format=png);
    position: relative;
    top: -11px;
    margin-left: -22px;
    float: left;
    height: 60px;
    width: 57px;
}
	</style>
	<style>
div#sitealert {
    color: #ffffff;
    font-weight: 500;
    font-size: 13px;
    padding: 10px;
    border-top: 2px solid;
}
marquee.sitealert {
    margin-left: 10px;
    color: #ffffff;
    font-size: 13px;
}
.animated { 
    -webkit-animation-duration: 1s; 
    animation-duration: 1s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
} 

@-webkit-keyframes bounceInDown { 
   0% { 
       opacity: 0; 
        -webkit-transform: translateY(-2000px); 
    } 
    60% { 
        opacity: 1; 
        -webkit-transform: translateY(30px); 
    } 
    80% { 
        -webkit-transform: translateY(-10px); 
    } 
    100% { 
        -webkit-transform: translateY(0); 
    } 
} 

@keyframes bounceInDown { 
    0% { 
        opacity: 0; 
        transform: translateY(-2000px); 
    } 
    60% { 
        opacity: 1; 
        transform: translateY(30px); 
    } 
    80% { 
        transform: translateY(-10px); 
    } 
    100% { 
        transform: translateY(0); 
    } 
} 

.bounceInDown { 
    -webkit-animation-name: bounceInDown; 
    animation-name: bounceInDown; 
}
#raw {
    margin: 0.5% auto;
    width: 1000px;
    position: relative;
    margin-bottom: 30px;
}
#home-box {
    height: 233px;
    width: 700px;
    background: url(/gallery/images/homebox.png);
    background-position: 1px -331px;
    border: 1px solid #80808094;
    box-shadow: 0px 0px 6px;
    float: left;
}
.avatar {
    height: 108px;
    width: 53px;
    position: absolute;
    top: 117px;
    left: 170px;
    -webkit-filter: drop-shadow(0 1px 0 #FFFFFF) drop-shadow(0 -1px 0 #ffffff) drop-shadow(1px 0 0 #ffffff) drop-shadow(-1px 0 0 #FFFFFF);
}
.level-box {
    /* background: black; */
    float: left;
    width: 284px;
    height: 233px;
    margin-left: 12px;
    border: 1px solid #80808094;
    box-shadow: 0px 0px 6px;
    background-image: url(/gallery/images/S4a6FNU.png);
    background-position: -184px -58px;
    /* transition: 300ms; */
    cursor: pointer;
}
.level-box:hover {
	opacity: 0.6;
}
.mylevel {
	text-align: center;
    font-size: 163px;
    color: white;
    text-shadow: 0px 0px 20px;
}
.level-text {
	text-align: center;
    font-size: 28px;
    color: white;
    background-image: url(/gallery/images/brill.gif);
    width: 73px;
    margin: 0 auto;
}
.level-avatar {
	width: 110px;
    height: 226px;
    position: absolute;
    margin-left: -21px;
    opacity: 0.6;
}
#homestats {
    margin-right: 234px;
    margin-top: 13px;
}
.homecredits {
    background-image: url(/gallery/images/coins.png);
    height: 61px;
    width: 62px;
    position: relative;
    z-index: 2;
}
.statsinfo {
    position: absolute;
    margin-top: -59px;
    margin-left: 52px;
    line-height: 3.5;
    background: #ffffff63;
    color: white;
    text-shadow: 0px 0px 10px;
    font-size: 17px;
    height: 57px;
    width: 139px;
    text-align: center;
    z-index: 1;
    box-shadow: 0px 0px 2px white;
    font-weight: 500;
}
#gohotel {
    position: absolute;
    left: 125px;
    top: 25px;
    background: #2c9830;
    border: 1px solid #ffffff5c;
    color: white;
    padding: 20px;
    width: 150px;
    text-align: center;
    font-size: 21px;
    font-weight: 500;
    /* text-shadow: 0px 0px 10px; */
    /* box-shadow: 0px 0px 9px; */
    cursor: pointer;
    transition: 300ms;
}
#gohotel:hover {
	opacity: 0.8;
}
#news {
    height: 237px;
    width: 500px;
    float: left;
    margin-top: 11px;
    border: 1px solid #342745;
    box-shadow: 0px 0px 6px;
    background-position: -1px 0px;
}
.news-title {
	text-align: center;
    color: white;
    padding: 7px;
    text-shadow: 0px 0px 13px;
    background: #342745;
    border-bottom: 2px solid white;
    font-size: 18px;
}
.go-news {
	position: absolute;
    font-size: 65px;
    color: white;
    margin-left: 425px;
    margin-top: 45px;
	transition: 300ms;
	cursor: pointer;
}
.go-news:hover {
	opacity: 0.7;
}
.news-slash-title {
	text-align: left;
    font-size: 17px;
    background: #00000091;
    color: white;
    padding: 7px;
    position: absolute;
    width: 487px;
    margin-top: 167px;
    margin-left: -1px;
}
hr {
	width: 481px;
}
#updates-box {
	float: left;
    width: 484px;
    height: 243px;
    background: #000000a3;
    margin-left: 14px;
    margin-top: 9px;
    border-radius: 4px;
}
.updates-img {
	background-image: url(/gallery/images/duckets_hw.png);
    height: 43px;
    width: 38px;
    float: right;
    margin: 9px;
    -webkit-filter: drop-shadow(0 1px 0 #ffffff) drop-shadow(0 -1px 0 #ffffff) drop-shadow(1px 0 0 #ffffff) drop-shadow(-1px 0 0 #ffffff) drop-shadow(0 0 10px rgba(255, 255, 255, 0.6));
}
.updates-txt {
    color: white;
    margin: 23px;
    text-shadow: 0px 0px 20px;
    padding-left: 33px;
    margin-top: 33px;
}
.updates-icon {
	position: absolute;
    font-size: 29px;
    margin-left: -38px;
    margin-top: -5px;
}
div#levelbox {
height: 51px;
    background: linear-gradient(45deg, #342745 1%, #48365d 64%, #6b5684 97%);
    /* position: absolute; */
    width: 1000px;
    margin-top: -62px;
    margin: 0 auto;
    border: 1px solid #80808073;
    /* box-shadow: 0px 0px 6px; */
}

div#mylevel-box {
    margin-top: 19px;
    position: absolute;
    text-align: center;
    width: 130px;
}

div#paddinglevel {
    width: 650px;
    margin: auto;
}
div#mylevelpoints {
    height: 24px;
    width: 1%;
    min-width: 20%;
    margin: auto;
    background: white;
    color: #5e5e5e;
    text-align: center;
    top: 8px;
    border-radius: 3px;
    position: relative;
    padding: 6px 0px;
    font-size: 20px;
    box-shadow: 0px 2px 1px rgba(0,0,0,0.1);
}
#oldlevel {
    float: left;
    font-size: 22px;
    color: white;
    margin: 13px;
    margin-left: 21px;
}
#nextlevel {
    float: right;
    font-size: 22px;
    color: white;
    margin: 13px;
    margin-right: 21px;
	background-image: url(/gallery/images/brill.gif);
}
</style>
    <script>
        $(document).ready(function(){
            $("#close").click(function(){
                $(".blend").hide();
                $(".login_bonus").hide();
            });

    </script>
	<script>
$(document).ready(function(){
$("#mylevelpoints").animate({'width': '<?php echo $next_level3; ?>%'}, 2000);
});

function time() {
    if (i < <?php if($next_level3 == '0') { echo '1'; } else { echo $next_level3; }; ?>) {
        i++;
        document.getElementById('mycount').innerHTML = i;
    } else {
        window.clearInterval(interval);
    }
}
var i=0;
var interval = window.setInterval('time()', <?php echo $next_level3; ?>*0.5);


</script>
	
<body>
<?php require ('./mytempl/header.php'); ?>
</div>
<div id="levelbox"><div id="oldlevel">SEVIYE <?php echo $meinlevel; ?></div><div id="nextlevel">SEVIYE <?php echo $meinlevel+1; ?> <i class="fas fa-level-up-alt"></i></div><div id="paddinglevel"><div id="mylevelpoints"><span id="mycount"></span>%<div id="staricon"></div></div></div></div>

<div id="raw">


<div id="home-box">


<div style="float: right;">
<a href="/hotel" target="_blank"><div id="gohotel">Hotele Gir!</div></a>
<div id="homestats">
<div class="homecredits"></div>
<div style="color: #ffe300;" class="statsinfo"><?php echo number_format($myrow['credits'], 0, ',', '.'); ?></div>
</div>
<div id="homestats">
<div style="background-image: url(/gallery/images/duckets.png);" class="homecredits"></div>
<div style="color: #e95beb;" class="statsinfo"><?php echo number_format($myrow['activity_points'], 0, ',', '.'); ?></div>
</div>

<div id="homestats">
<div style="	background-image: url(/gallery/images/dias.png);" class="homecredits"></div>
<div style="color: #50bcff;" class="statsinfo"><?php echo number_format($myrow['vip_points'], 0, ',', '.'); ?></div>
</div>
</div>

<div class="avatar" style="background: url(<?php echo $avatar ?><?php echo $myrow['look']; ?>&action=wlk&gesture=sml&direction=2&head_direction=3&size=n&frame=wlk=2&img_format=png);"></div>


</div>

<div class="level-box">
<div class="level-avatar" style="background: url(<?php echo $avatar ?><?php echo $myrow['look']; ?>&action=std&gesture=srp&direction=3&head_direction=3&size=l&img_format=png);"></div>
<div class="mylevel"><?php echo $meinlevel ?></div>
<div class="level-text">Level</div>

</div>

<!--- news --->
<?php
$sql2 = mysql_query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 1"); 
while($sql = mysql_fetch_assoc($sql2)) { ?>
<div id="news" style="background-image: url(<?php echo $sql['image']; ?>);">
<div class="news-title"> <i class="far fa-newspaper"></i> Kabbo Haberler</div>
<a href="/news/<?php echo $sql['id']; ?>"><div class="go-news"> <i class="fas fa-chevron-circle-right"></i></div></a>

<div class="news-slash-title"> <i class="fas fa-arrow-alt-circle-right"></i> <?php echo $sql['title']; ?></div>

</div>
<?php } ?>

<div id="updates-box">

<div class="updates-img"></div>
<div class="updates-txt"> 
<div class="updates-icon"><i class="fas fa-wrench"></div></i> Yeni Halloween CMS Tasarımı yapıldı!</div>	
<hr></hr>

<div class="updates-img"></div>
<div class="updates-txt"> 
<div class="updates-icon"><i class="fas fa-wrench"></div></i> Client Tasarımı Yenilendi!</div>	
<hr></hr>

<div class="updates-img"></div>
<div class="updates-txt"> 
<div class="updates-icon"><i class="fas fa-wrench"></div></i> Yeni Giriş-Kayıt Tasarlandı!</div>	
<hr></hr>

</div>
	
	
</div>
		

<div id="habbowood"></div>

</div>
<div class="large_spacer"></div>
<div class="footer">
<div class="padding">
<center class="footertext">
<?php require ('./mytempl/footer.php') ?>
</div>
</div>
</div>
</body>
</html>