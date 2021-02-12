<?php
error_reporting(0); 
session_start();
 // if($_SERVER['HTTP_HOST'] != 'cabbo.li' && $_SERVER['HTTP_HOST'] != 'cabbo.li'){ header('Location: http://cabbo.li'); }
header('Content-Type: text/html; charset=UTF-8');

$seite =  $_GET['seite'];
if(isset($seite)){
	$filename = "./_seiten/".$seite.".php";
	if (file_exists($filename)) {
		require("./_seiten/".$seite.".php");  
	} else {
		require("./_seiten/error.php");
	}
} else {
	require("./_seiten/index.php"); 
} 
?>