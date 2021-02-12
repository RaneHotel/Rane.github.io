<?php 
$sec_check = '1';
 require('./inc/core.php');
 require('./inc/session.php');

$title = "Kabbo :: Destek Ekip";
?>

<html>
<head>
<?php require ('./mytempl/head.php'); ?>
</head>
<body>
<?php require ('./mytempl/header2.php'); ?>
</div>

<div id="raw">
<div class="left">
<style>
.hr-staff {
    width: 167px;
}
#raw {
    margin: 1% auto;
    width: 1000px;
    position: relative;
    margin-bottom: 30px;
}
#staffbox {
    width: 300px;
    float: left;
    padding: 10px;
    height: 140px;
    background: linear-gradient(45deg, #4b3961 1%, #67527f 64%, #6b5684 97%);
    margin: 0 6px 5px 0;
    border-radius: 3px;
    text-align: center;
    color: #ffffff;
    border: 1px solid #c8c8c8;

}
#mimarstaffbox {
    width: 300px;
    float: left;
    padding: 10px;
    height: 140px;
    background: linear-gradient(45deg, #8e7929 1%, #af9134 64%, #e6b50a 97%);
    margin: 0 6px 5px 0;
    border-radius: 3px;
    text-align: center;
    color: #ffffff;
    border: 1px solid #c8c8c8;
}

#ytstaffbox {
    width: 300px;
    float: left;
    padding: 10px;
    height: 140px;
    background: linear-gradient(45deg, #770d0d 1%, #bf1c0c 64%, #ff1704 97%);
    margin: 0 6px 5px 0;
    border-radius: 3px;
    text-align: center;
    color: #ffffff;
    border: 1px solid #c8c8c8;
}

.staffavatar {
	height: 181px;
    width: 112px;
    margin-top: -32px;
    float: right;
    margin-left: -12px;
}
.staffname {
    text-align: center;
    margin-top: 29px;
    font-size: 23px;
}
.staffstats {
    text-align: center;
    /* font-size: 15px; */
    /* margin-top: -5px; */
    /* font-family: ubuntu; */
    font-size: 13px;
    margin-top: -5px;
    /* font-family: ubuntu; */
    /* float: left; */
}
  .left {
	
	width:calc( 645px - 20px );
	float:left;
	
}
.mimarbox {
    background: #ab8f24;
    color: #342745;
    border-radius: 3px;
    padding: 10px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 4px rgba(0,0,0,0.15), 0 1px rgba(0,0,0,0.15);
    overflow: hidden;
    word-break: break-word;
    width: 1000px;
    border: 1px solid #ffffff59;
}	

.ytbox {
    background: #ab1313;
    color: #342745;
    border-radius: 3px;
    padding: 10px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 4px rgba(0,0,0,0.15), 0 1px rgba(0,0,0,0.15);
    overflow: hidden;
    word-break: break-word;
    width: 1000px;
    border: 1px solid #ffffff59;
}

.box {
    background: #342745;
    color: #342745;
    border-radius: 3px;
    padding: 10px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 4px rgba(0,0,0,0.15), 0 1px rgba(0,0,0,0.15);
    overflow: hidden;
    word-break: break-word;
    width: 1000px;
    border: 1px solid #ffffff59;
}
.teambox > .user > img {margin-top:-50px;transition-duration:0.6s;cursor:pointer;}
.teambox > .user > img:hover, .teambox > .user:hover > img{margin-top:-60px;}
.kontur {-webkit-filter:drop-shadow(0 1px 0 #FFF) drop-shadow(0 -1px 0 #FFF) drop-shadow(1px 0 0 #FFF) drop-shadow(-1px 0 0 #FFF) drop-shadow(0 0 5px rgba(000,000,000,0.7));}
.staffboxtext {
    text-align: center;
    font-weight: 600;
    color: #ffffff;
    text-transform: uppercase;
}
</style>


<div class="mimarbox">
<div class="staffboxtext">- Mimar -</div>
<hr>
<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '2' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) { ?>
<div id="mimarstaffbox" style="<?php if($sql['online'] == 0) { echo'    border: 1px solid #909090; opacity: 0.5;'; }?>">
<div class="staffavatar" style=" background-image: url(<?php echo $avatar?><?php echo $sql['look']; ?>&action=std&gesture=<?php if($sql['online'] == 1) { echo'sml'; } else { echo'eyb'; } ?>&direction=2&head_direction=3&size=l&img_format=png);"></div>
<div class="staffname"><?php echo $sql['username']; ?></div>
<hr class="hr-staff">
<br><div class="staffstats">Görev: <?php echo $sql['staffstatus']; ?></div></br>
<div class="staffstats">Motto: <?php echo $sql['motto']; ?></div>
</div>
<?php } ?>
</div>

<div class="ytbox">
<div class="staffboxtext">- Youtuber -</div>
<hr>
<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '3' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) { ?>
<div id="ytstaffbox" style="<?php if($sql['online'] == 0) { echo'    border: 1px solid #909090; opacity: 0.5;'; }?>">
<div class="staffavatar" style=" background-image: url(<?php echo $avatar?><?php echo $sql['look']; ?>&action=std&gesture=<?php if($sql['online'] == 1) { echo'sml'; } else { echo'eyb'; } ?>&direction=2&head_direction=3&size=l&img_format=png);"></div>
<div class="staffname"><?php echo $sql['username']; ?></div>
<hr class="hr-staff">
<br><div class="staffstats">Görev: <?php echo $sql['staffstatus']; ?></div>
<br><div class="staffstats">Kanalım: <?php echo $sql['motto']; ?></div></br>

</div>
<?php } ?>
</div>



</div>
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