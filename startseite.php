<?php 
require('../../inc/core.php');

if(isset($_SESSION['username'])){
 echo 'jo';	
} else { 
$index_getuser = mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 5");
while($sql = mysql_fetch_assoc($index_getuser)) {
?>

<div id="user-box">
<div id="avatar-box" style="background-image:url('http://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&direction=2&action=wlk,wav&gesture=sml&size=m');"></div>
<div id="user-info">
<b>Yeni Üye:</b> <?php echo $sql['username']; ?><br>
<span style="font-size:11px;">
..şu anda <b><?php echo $user_stats['Achieviements']; ?></b> Seviye puanı topladı.<br>
..son giriş <b><?php echo date('H:i', $sql['last_online']-3600); ?></b>.</span>
</div>
</div>

<?php } 
}
?>
