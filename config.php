<?php
class db
{
var $connid;
var $erg;

function db($host,$user,$passwort)
{
if(!$this->connid = mysql_connect($host, $user, $passwort))
{
echo "Es konnte keine Verbindung zum Datenbank gefunden werden."; exit;
}
return $this->connid;
}
function select_db($db)
{
if (!mysql_select_db($db, $this->connid))
{
echo "Fehler beim Auswählen der Datenbank.."; exit;
}
}
}

$db = new db("127.0.0.1","root","hmbV^s7Yp6PMBpnB");
$db->select_db("test");



$hotelname = "Kabbo";
$avatar = "http://habbo.it/habbo-imaging/avatarimage?figure=";
$path = 'http://'.$_SERVER['HTTP_HOST'];
$imgpath = $path.'/gallery/imgs/';
$ap = $path.'/hotel_pnl/';
?>