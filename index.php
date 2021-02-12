<?php error_reporting(0); 
session_start();
$countdown = false;
$site =  $_GET['seite'];

if(isset($site)){
	$filename = "./_seiten/".$site.".php";
	if (file_exists($filename)) {
		require("./_seiten/".$site.".php");  
	} else {
		require("./_seiten/error.php");
	}
} else {

	require("./_seiten/index.php"); 

} 

?>
