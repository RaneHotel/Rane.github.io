<?php 
require('./inc/core.php');
$userid = $myrow['id'];
@session_destroy();
session_unset();  
header("location: ".$path.""); exit;
?>
