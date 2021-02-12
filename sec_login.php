<?php
session_start();

$code = "kabbo1337"; //sicherheitscode hier

if($_POST['sec'] == $code) {
$_SESSION['slogin'] = 999999999;
echo '<meta http-equiv="refresh" content="0; URL=./home">';
}
?>