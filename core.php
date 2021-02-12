<?php
error_reporting(E_ERROR);
ini_set('display_errors', 1);
session_start();
@require_once('config.php');

header('Content-Type: text/html; charset=UTF-8');


  date_default_timezone_set('Etc/GMT+6'); 
 
 
// MD5 HASH
function HoloHashMD5($password){
	$hash_secret = "xCg532%@%gdvf^5DGaa6&*rFTfg^FD4\$OIFThrR_gh(ugf*/";
	$string = md5($password.($hash_secret));
	return $string;
}

// Escape string
function Escape($str, $advanced=false) {
	if($advanced == true){ return mysql_real_escape_string(addslashes($str)); }
	$str = mysql_real_escape_string(addslashes(htmlspecialchars($str)));
	return $str;
}

function News($str) {
	if(get_magic_quotes_gpc()){ $str = stripslashes($str); }
	$str = preg_replace(array('/\x{0001}/u','/\x{0002}/u','/\x{0003}/u','/\x{0005}/u','/\x{0009}/u'),' ',$str);
	$str = mysql_real_escape_string($str);
	return $str;
}

function wordFilter($text)
{
    $filtered_text = $text;
	$wordfilter = mysql_query("SELECT * FROM wordfilter ORDER by id DESC");
	while($sql = mysql_fetch_assoc($wordfilter)) {
    $filtered_text = str_replace($sql['word'], '****', $filtered_text);
	}
    return $filtered_text;
}

// MUS-DATA
define('SEP', DIRECTORY_SEPARATOR);
$dir = str_replace('register'.SEP, '', dirname(__FILE__).SEP);
define('DIR', $dir);
define('INCLUDES', DIR.''.SEP);


class Core {
	public function MUS($command, $data = ''){
		$MUSdata = $command . chr(1) . $data;
		$socket = socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		socket_connect($socket, '10.2.0.4', '3041'); 
		socket_send($socket, $MUSdata, strlen($MUSdata), MSG_DONTROUTE);
	}
}
$core = new Core;

// Htmlspecialchars
function xEscape($str, $advanced=false, $bbcode=false) {
	if($advanced == true){ return stripslashes($str); }
	$str = stripslashes(nl2br(htmlspecialchars($str)));
	return $str;
}


 function UniqueMachineID($salt = "") {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $temp = sys_get_temp_dir().DIRECTORY_SEPARATOR."diskpartscript.txt";
        if(!file_exists($temp) && !is_file($temp)) file_put_contents($temp, "select disk 0\ndetail disk");
        $output = shell_exec("diskpart /s ".$temp);
        $lines = explode("\n",$output);
        $result = array_filter($lines,function($line) {
            return stripos($line,"ID:")!==false;
        });
        if(count($result)>0) {
            $result = array_shift(array_values($result));
            $result = explode(":",$result);
            $result = trim(end($result));       
        } else $result = $output;       
    } else {
        $result = shell_exec("blkid -o value -s UUID");  
        if(stripos($result,"blkid")!==false) {
            $result = $_SERVER['HTTP_HOST'];
        }
    }   
    return md5($salt.md5($result));
}


if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])){
  $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
}
if(isset($_SERVER['HTTP_INCAP_CLIENT_IP'])){
  $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_INCAP_CLIENT_IP'];
}
$remote_ip = $_SERVER['REMOTE_ADDR'];
$date = date('d.m.Y H:i:s');
$date2 = date('d.m.Y');
$server = mysql_fetch_assoc($server_status = mysql_query("SELECT * FROM server_status"));
$onlinecount = $server['users_online'];
$_SESSION['lastcheck'] = time();




// LOGIN
if(session_is_registered('username')){
	$rawname = Escape($_SESSION['username']);
	$rawpass = Escape($_SESSION['password']);
	$usersql = mysql_query("SELECT * FROM users WHERE username = '".$rawname."' AND password = '".$rawpass."' LIMIT 1");
	$myrow = mysql_fetch_assoc($usersql);
	$password_correct = mysql_num_rows($usersql);
	$userid = $myrow['id'];
	$user_rank = $myrow['rank'];
	$username = $myrow['username'];
	if($password_correct !== 1 || $_SESSION['ip'] != $remote_ip){
	@session_destroy();
	header("location: ".$path."");
	exit;
	}
	$logged_in = true;
	$name = $myrow['username'];
	$user_stats = mysql_fetch_assoc(mysql_query("SELECT * FROM user_stats WHERE id = '".$myrow['id']."'"));
	$punkte = $user_stats['AchievementScore'];
	} 
	else {
	$user_rank = 0;
	$username = "Gast";
	$user_id = "0";
	$myticket = "NZ-No-Name-habbo-fe";
	$logged_in = false;
	}


$onlinecounter = mysql_num_rows(mysql_query("SELECT * FROM users WHERE rank > 0 && online = '1'"));


$checklevel = floor(pow(($punkte/10),(1/2)));
$checklevel2 = floor(pow(($punkte/5),(1/2)));
$meinlevel = $checklevel;

for($i=1;$i<101;$i++){
            $level[$i] = pow($i,2)*10;
			$thelevel[$i] = $level[$i];
}

$tonextlevel = $level[++$checklevel];
$lastlevelpunkte = $level[$meinlevel];
$next_level1 = $punkte - $lastlevelpunkte;
$next_level2 = $tonextlevel - $lastlevelpunkte;
$next_level3 = $next_level1 / $next_level2 *100;

	


	if($user_rank > 4 && empty($_SESSION['slogin'])) {
			header("Location: $path/sicherheitslogin");
	}	

?>
