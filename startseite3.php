<?php 
require('../../inc/core.php');

if(isset($_SESSION['username'])){
 echo 'jo';	
} else {
echo $onlinecount;
}
?>
