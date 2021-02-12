<?php 
require('./inc/core.php');
require('./inc/session.php');
?>
<!doctype html>
<html lang="de">
<?php
$title = "Mabbo :: Top Üyeler";
$page = "topluluk";
$spage = "topuser";

include('./templ/main_head.php');
?>



<body>
<?php include('./templ/main_header.php'); ?>

<div id="raw" class="slider">

<div id="topuser">
<h4 class="topuser">TOP ELMAS</h4>
<h5 class="topuser">..en cok Elmaslar</h5>
<ul class="topuser">
<?php $row = mysql_query("SELECT username,look,vip_points,motto FROM users WHERE rank < 3 ORDER BY vip_points DESC LIMIT 4");
while($sql = mysql_fetch_assoc($row)){ ?>
<a href="<?php echo $path; ?>/profil/<?php echo $sql['username']; ?>" >
<li>
<div id="topuser-avatar" style="background-image:url('https://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&gesture=sml&size=s');"></div>
<div id="infos">
<div id="topuser-name"><?php echo $sql['username']; ?></div>
<div id="topuser-credit">.. <?php echo number_format($sql['vip_points'], 0, ',', '.'); ?> Elmas</div>
</div>
</li>
</a>
<?php } ?>
</ul>
</div>

<div id="topuser">
<h4 class="topuser">TOP ÖRDEK</h4>
<h5 class="topuser">..en cok Ördekler</h5>
<ul class="topuser">

<?php $row = mysql_query("SELECT username,look,activity_points,motto FROM users WHERE rank < 3 ORDER BY activity_points DESC LIMIT 4");
while($sql = mysql_fetch_assoc($row)){ ?>
<a href="<?php echo $path; ?>/profil/<?php echo $sql['username']; ?>" >
<li>
<div id="topuser-avatar" style="background-image:url('https://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&gesture=sml&size=s');"></div>
<div id="infos">
<div id="topuser-name"><?php echo $sql['username']; ?></div>
<div id="topuser-credit">.. <?php echo number_format($sql['activity_points'], 0, ',', '.'); ?> Ördek</div>
</div>
</li>
</a>
<?php } ?>
</ul>
</div>

<div id="topuser">
<h4 class="topuser">TOP KREDI</h4>
<h5 class="topuser">..en cok Krediler</h5>
<ul class="topuser">
<?php $row = mysql_query("SELECT username,look,credits,motto FROM users WHERE rank < 3 ORDER BY credits DESC LIMIT 4");
while($sql = mysql_fetch_assoc($row)){ ?>
<a href="<?php echo $path; ?>/profil/<?php echo $sql['username']; ?>" >
<li>
<div id="topuser-avatar" style="background-image:url('https://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&gesture=sml&size=s');"></div>
<div id="infos">
<div id="topuser-name"><?php echo $sql['username']; ?></div>
<div id="topuser-credit">.. <?php echo number_format($sql['credits'], 0, ',', '.'); ?> Kredi</div>
</div>
</li>
</a>
<?php } ?>
</ul>
</div>


<div id="topuser" >
<h4 class="topuser">TOP ZAMAN ÇEVRIMIÇI</h4>
<h5 class="topuser">..en cok zaman çevrimiçi</h5>
<ul class="topuser">
<?php $row = mysql_query("SELECT id, OnlineTime FROM user_stats ORDER BY OnlineTime DESC LIMIT 4");
while($sql = mysql_fetch_assoc($row)){
$usersql = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$sql['id']."'"));	?>
<a href="<?php echo $path; ?>/profil/<?php echo $usersql['username']; ?>" >
<li>
<div id="topuser-avatar" style="background-image:url('https://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $usersql['look']; ?>&head_direction=3&gesture=sml&size=s');"></div>
<div id="infos">
<div id="topuser-name"><?php echo $usersql['username']; ?></div>
<div id="topuser-credit">.. <?php echo round($sql['OnlineTime'] / 60 / 60); ?>  Saat</div>
</div>
</li>
</a>
<?php } ?>
</ul>
</div>

<?php include('./templ/footer.php'); ?>

</body>
</html>