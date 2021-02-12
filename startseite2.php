<?php 
require('../../inc/core.php');

if(isset($_SESSION['username'])){
 echo 'jo';	
} else { 
$regis = mysql_num_rows(mysql_query("SELECT * FROM users WHERE id"));
$rooms = mysql_num_rows(mysql_query("SELECT * FROM rooms WHERE id"));
$heutige_spieler = mysql_num_rows(mysql_query('SELECT * FROM users WHERE last_online > \''.mktime(0, 0, 0, date('m'), date('d'), date('Y')).'\''));
$index_getuser = mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 5");
?>

<ul class="statistik">
<li>Bugünün Oyuncular: <span style="float:right;"><?php echo number_format($heutige_spieler, 0, ',', '.'); ?></span></li>
<li>Oluşturan Odalar: <span style="float:right;"><?php echo number_format($rooms, 0, ',', '.'); ?></span></li>
<li>Oyuncular Rekoru <span style="float:right;">151</span></li>
</ul>
<?php
}
?>
