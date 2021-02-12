<?php
 require('./inc/core.php');
 require('./inc/session.php');

 $page = "Client";

 header('Location: http://habbo.retrounited.eu/templ/client_gateway.php?username='.$myrow['username'].'&password='.$myrow['password'].((isset($_SESSION['slogin'])) ? '&slogin='.$_SESSION['slogin'] : ''));
 exit();
?>