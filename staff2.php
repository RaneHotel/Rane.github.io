<?php 
$sec_check = '1';
 require('./inc/core.php');
 require('./inc/session.php');

$title = "Mabbo :: Topuser";
?>

<html>
    <head>
		<?php require ('./mytempl/head.php'); ?>
				<link rel="stylesheet" href="/gallery/css/common.css?dp" type="text/css" />


    </head>
    <body>
		<?php require ('./mytempl/header2.php'); ?>
            </div>
        </div>
        <div id="wrapper">
            <div class="layout_1">
</div>
</div></div>

<input type="hidden" value="" id="token" />
<style type="text/css">
div.pubeur h2.title {
background-color: #774577;
}
div.graphiste h2.title {
background-color: #9F1E47;
}
div.croupier h2.title {
background-color: #67A8A9;
}
div.guide h2.title {
background-color: #A07F85;
}
div.resp h2.title {
text-align: center;
background-color: #5a5a5a;
}
div.architecte h2.title {
background-color: #979A97;
}
#offline {
height: 18px;
width: 40px;
background-position: -37px -0px;
}
#online {
height: 18px;
width: 37px;
background-position: -0px -0px;
}
.sprites {
background-image: url(//habbo-alpha.eu/img/online_disco.png);
background-color: transparent;
background-repeat: no-repeat;
}
body {
  background-color: #e3e3db;
  font-size: 10px;
  font-family: Verdana,Arial,Helvetica,sans-serif;
  text-align: center;
  margin: 0;
  padding: 0;
}
#staff {
  
display: inline-block;
    overflow: hidden;
    vertical-align: middle;
    padding-left: 6px;
    padding-bottom: 55px;
    padding-top: 3px;
    width: 145px;
    height: 88px;
    overflow-x: hidden;
    /* position: relative; */
}
</style>
<div id="container">
<div id="content" style="position: relative" class="clearfix">
<div id="column4" class="column">
<div class="habblet-container " style="width: 770px;">
<div class="cbb clearfix resp">
<h2 class="title" style="    height: 16px;"><span style="text-align: center;">Hotel Sahibi</span>
</h2>
<div class="box-content" style="padding-left: 30px;">
														<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '15' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) {
?>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="/gallery/images/icons/badge.gif"></div>
<div class="hint--small hint--bottom " data-hint="RDG - Je vis je visser" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&action=std&gesture=std&direction=3&head_direction=3&size=l&img_format=png);    box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);
    border: 2px solid #e3e3db;
    background-color: #EECD98;
    width: 138px;
    height: 108px;
    background-position: 1px -33px;
    /* border-radius: 35px; */
    /* border-bottom-right-radius: 0; */
    /* border-top-left-radius: 0; */"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=-Errance">- <?php echo $sql['username'] ?> -</a></b> <br />
<i style="color:#888">(Resp. Graph)</i>
<br>
<div class="sprites" id="online"></div>
</td>
</center>
</div>
                    <?php } ?>

</div>
</div>
<div class="habblet-container " style="width: 770px;">
<div class="cbb clearfix graphiste">
<h2 class="title"><span style="text-align: center;">Il y'a actuellement 4 membres de l'équipe publicitaire!</span>
</h2>
<div class="box-content" style="padding-left: 30px;">
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="https://habbo-alpha.eu/c_images/album1584/E1SH.gif"></div>
<div class="hint--small hint--bottom " data-hint="[Graph] [Pixel Art] L ƒ créa offi" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=fa-987462835-110.sh-3027-1321-1321.ch-266-93.he-1607-153638.hr-1171832-1035.hd-180-3.lg-281-93.ea-6136543-100.cp-3120-93&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #9F1E47;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Sykro">Sykro</a></b> <br />
<i style="color:#888">(Graphiste)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="https://habbo-alpha.eu/c_images/album1584/E1SH.gif"></div>
<div class="hint--small hint--bottom " data-hint="[GRAPH] [P] 1° Pouffy -Nina Pakhomov" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=hd-600-10.lg-3006-153638-153640.he-3376-1322-64.sh-3524-1334-64.hr-832-58.ca-3437-1334.fa-3276-1205.ch-3233-110&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #9F1E47;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Nouilleti">Nouilleti</a></b> <br />
<i style="color:#888">(Graphiste)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="https://habbo-alpha.eu/c_images/album1584/E1SH.gif"></div>
<div class="hint--small hint--bottom " data-hint="la mode se démode le style jamais" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=sh-3035-71.ha-1022-71.hd-205-1.hr-1171832-37.cc-887-71.lg-6050208-80.wa-9211528-71-153640&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #9F1E47;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Aishling">Aishling</a></b> <br />
<i style="color:#888">(Graphiste)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="https://habbo-alpha.eu/c_images/album1584/E1SH.gif"></div>
<div class="hint--small hint--bottom " data-hint="[GRAPH] I'll be a Firemen" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=wa-987462910-153638.sh-9394-62.fa-4541998-153638.hr-3163-32.ch-215-92.he-1609-73.hd-180-7.ca-1807-153638.lg-3320-82-153640.ea-1405-153638&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #9F1E47;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Nobium">Nobium</a></b> <br />
<i style="color:#888">(Graphiste)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
</div>
</div>
</div>
<div class="habblet-container " style="width: 770px;">
<div class="cbb clearfix guide">
<h2 class="title"><span style="float: left;">Il y'a actuellement 3 Guides!</span>
</h2>
<div class="box-content" style="padding-left: 30px;">
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/X79E.gif"></div>
<div class="hint--small hint--bottom " data-hint="2013 - [Guide] N |" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=hr-9301476-1403-158639.lg-3019-82.he-3329-1331-110.ch-685-110.ca-3414-1185.sh-3089-1432.hd-3099-1014&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #A07F85;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Unforgettable">Unforgettable</a></b> <br />
<i style="color:#888">(Guide)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/X79E.gif"></div>
<div class="hint--small hint--bottom " data-hint="Guide Experte en kiwi" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=hd-3096-3.lg-987462843-71.sh-740-64.hr-9777571-1404.ch-685-64.he-4566-92&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #A07F85;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Through">Through</a></b> <br />
<i style="color:#888">(Guide)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/X79E.gif"></div>
<div class="hint--small hint--bottom " data-hint="Guide, AHA Hugo" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=ha-1009-92.ch-3323-92-110.ca-3414-110.ea-757003-100.lg-30061-92-110.he-3376-110-92.wa-987462910-153640.hd-209-1370.hr-3163-39.sh-290-92.fa-3276-89&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #A07F85;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Tolker">Tolker</a></b> <br />
<i style="color:#888">(Guide)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
</div>
</div>
</div>
<div class="habblet-container " style="width: 770px;">
<div class="cbb clearfix architecte">
<h2 class="title"><span style="float: left;">Il y'a actuellement 5 Architectes!</span>
</h2>
<div class="box-content" style="padding-left: 30px;">
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/9HVZ.gif"></div>
<div class="hint--small hint--bottom " data-hint="Architecte - Girls" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=fa-3296-73.ch-660-110.hd-3096-2.he-4808-1413.lg-3006-93-93.sh-740-1413.hr-834-31&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #979A97;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Cassandra">Cassandra</a></b> <br />
<i style="color:#888">(Architecte)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/9HVZ.gif"></div>
<div class="hint--small hint--bottom " data-hint="[Archi] Strong with a soft heart" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=hd-190-1370.ch-210-1340.sh-305-92.hr-165-59.ha-1012-153638.lg-285-81&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #979A97;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Durafoze">Durafoze</a></b> <br />
<i style="color:#888">(Architecte)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/9HVZ.gif"></div>
<div class="hint--small hint--bottom " data-hint="libérez nelpera" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=sh-305-92.hr-6456-1403.hd-180-1359.ea-1404-110.lg-285-64.ch-3001-92-108&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #979A97;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Yale">Yale</a></b> <br />
<i style="color:#888">(Architecte)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/9HVZ.gif"></div>
<div class="hint--small hint--bottom " data-hint="" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=lg-285-68.sh-305-110.hd-207-1359.hr-3322-45.ch-220-110&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #979A97;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Navilus">Navilus</a></b> <br />
<i style="color:#888">(Architecte)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
<div id="staff">
<center>
<tbody>
<tr>
<td valign="middle" width="25">
</td>
<td valign="top">
<tbody>
<tr>
<td valign="middle">
<div style="position: absolute; z-index:1;  margin-left: -7px;margin-top: -5px;"><img src="//habbo-alpha.eu/c_images/album1584/9HVZ.gif"></div>
<div class="hint--small hint--bottom " data-hint="archi con comme pandounette" style="background: url(//avatar-retro.com/habbo-imaging/avatarimage?figure=sh-740-74.hd-629-2.ch-630-1326.he-3164-74-153640.ea-3168-71.hr-3012-31.lg-695-110&amp;direction=2&gesture=sml&amp;head_direction=3&amp;size=b&amp;img_format=gif);box-shadow: 0px 1px 0px 2px rgba(0,0,0,0.3);border: 2px solid #e3e3db;background-color: #979A97;width: 68px;height: 65px;background-position: 1px -10px;border-radius: 35px;border-bottom-right-radius: 0;border-top-left-radius: 0;"></div>
<br>
<b style="font-size: 110%;"><a href="home.php?username=Brakmind">Brakmind</a></b> <br />
<i style="color:#888">(Architecte)</i><br>
<div class="sprites" id="offline"></div>
</td>
</center>
</div>
</div>
</div>
</div>
</div>
﻿</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
<div id="footer">
<p class="footer-links">
<a href="/papers/termsAndConditions" title="Conditions d'utilisation" target="_new">Conditions d'utilisation</a>
</p>
<p class="copyright">
2013 - 2018 Habbo-Alpha.
<br>Habbo-Alpha est un projet indépendant, à but non lucratif.
<br>Nous ne sommes pas approuvés, affiliés, ou offerts par Sulake Corporation LTD.
</p>
</div>
</body>
</html>
