<?php
 require('../core.php');

 $friendRequestsAllowed = Escape($_POST['friends']);
 $tauschenAktiviert = Escape($_POST['tauschen']);
 $followFriendMode = Escape($_POST['roomvisit']);
 
 mysql_query("UPDATE users SET block_newfriends = '".$friendRequestsAllowed."', accept_trading = '".$tauschenAktiviert."', hide_inroom = '".$followFriendMode."' WHERE id = '".$myrow['id']."' LIMIT 1") or die(mysql_error());
?>