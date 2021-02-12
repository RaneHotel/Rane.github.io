<?php 
$sec_check = '1';
 require('./inc/core.php');
 require('./inc/session.php');

$title = "Kabbo :: Topuser";
?>

<html>
    <head>
		<?php require ('./mytempl/head.php'); ?>
    </head>
    <body>
		<?php require ('./mytempl/header2.php'); ?>
            </div>
        </div>
        <div id="wrapper">
            <div class="layout_1">
                <div class="box">
                <div class="box_title">TOP 5 KREDI</div>
															<?php $row = mysql_query("SELECT username,look,credits,motto FROM users WHERE rank < 3 ORDER BY credits DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){ ?>
                                            <div class="long" style="height:80px">
											
                        <div class="padding">
                        <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&headonly=1" style="float:left"/>
                            <div class="topuser_detail">
                                <b><?php echo $sql['username']; ?></b><br> 
                                <?php echo number_format($sql['credits'], 0, ',', '.'); ?>                                <div class="user-credits" style="position:absolute; right:10px; top:30px;"></div>

                            </div>
                        </div>
                        </div>
						<?php } ?>


                                              
                                        </div>
                <div class="box">
                    <div class="box_title">TOP 5 PUAN</div>
					<?php $row = mysql_query("SELECT id, AchievementScore FROM user_stats ORDER BY AchievementScore DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){
$usersql = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$sql['id']."'"));	?>
                                                <div class="long" style="height:80px">
                            <div class="padding">
                            <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $usersql['look']; ?>&headonly=1" style="float:left"/>
                                <div class="topuser_detail">
                                    <b><?php echo $usersql['username']; ?></b><br> 
                                    <?php echo $sql['AchievementScore']; ?>                                    <div class="user-flips" style="position:absolute; right:10px; top:30px;"></div>
                                </div>
                            </div>
                            </div>
													<?php } ?>

                                            </div>
            </div>
            <div class="layout_2">
                <div class="box">
                    <div class="box_title">TOP 5 ÖRDEK</div>
					<?php $row = mysql_query("SELECT username,look,activity_points,motto FROM users WHERE rank < 3 ORDER BY activity_points DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){ ?>
                                            <div class="long" style="height:80px">
                        <div class="padding">
                        <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&headonly=1" style="float:left"/>
                            <div class="topuser_detail">
                                <b><?php echo $sql['username']; ?></b><br> 
                                <?php echo number_format($sql['activity_points'], 0, ',', '.'); ?>                                <div class="user-duckets" style="position:absolute; right:10px; top:30px;"></div>
                            </div>
                        </div>
                        </div>
						<?php } ?>

                                        </div>
                <div class="box">
                    <div class="box_title">TOP 5 ONLINE</div>
					<?php $row = mysql_query("SELECT id, OnlineTime FROM user_stats ORDER BY OnlineTime DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){
$usersql = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$sql['id']."'"));	?>
                                                <div class="long" style="height:80px">
                            <div class="padding">
                            <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $usersql['look']; ?>&headonly=1" style="float:left"/>
                                <div class="topuser_detail">
                                    <b><?php echo $usersql['username']; ?></b><br> 
                                    <?php echo round($sql['OnlineTime'] / 60 / 60); ?>                                    <div class="user-hour" style="position:absolute; right:10px; top:30px;"></div>
                                </div>
                            </div>
                            </div>
							<?php } ?>

                                            </div>
            </div>
            <div class="layout_3">
                <div class="box">
                    <div class="box_title">TOP 5 ELMAS</div>
					<?php $row = mysql_query("SELECT username,look,vip_points,motto FROM users WHERE rank < 3 ORDER BY vip_points DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){ ?>
                                                <div class="long" style="height:80px">
                            <div class="padding">
                            <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&headonly=1" style="float:left"/>
                                <div class="topuser_detail">
                                    <b><?php echo $sql['username']; ?></b><br> 
                                    <?php echo number_format($sql['vip_points'], 0, ',', '.'); ?>                                    <div class="user-diamonds" style="position:absolute; right:10px; top:30px;"></div>
                                </div>
                            </div>
                            </div>
							<?php } ?>

                                            </div>
                <div class="box">
                    <div class="box_title">TOP 5 SAYGI</div>
<?php $row = mysql_query("SELECT id, Respect FROM user_stats ORDER BY Respect DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){
$usersql = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$sql['id']."'"));	?>
                                                <div class="long" style="height:80px">
                            <div class="padding">
                            <img src="https://habbo.it/habbo-imaging/avatarimage?figure=<?php echo $usersql['look']; ?>&headonly=1" style="float:left"/>
                                <div class="topuser_detail">
                                    <b><?php echo $usersql['username']; ?></b><br> 
                                    <?php echo $sql['Respect']; ?>                               <div class="user-thumb" style="position:absolute; right:10px; top:30px;"></div>
                                </div>
                            </div>
                            </div>
							<?php } ?>

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