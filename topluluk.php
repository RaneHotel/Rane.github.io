<?php 
require('./inc/core.php');
require('./inc/session.php');

$title = "Mabbo :: Personel";
?>

﻿<!DOCTYPE html>
<html>
	<head>
<?php include('./templ/cheader.php'); ?>

	</head>
	
	<div class="loader">
		<div style="margin: 20% auto;">
			<div id="socketConnectionLoader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			
			<div class="socketConnectionLoaderText">Verbindung wird hergestellt...</div>
		</div>
	</div>
	
	<body>
	
<?php include('./templ/header.php'); ?>

		
	</header>
		
	
	
	<div class="clearfix"></div>



<div class="content">
	<div class="col grid_12">
		<div class="col grid_8">
			<div class="box">
				<div id="title">
					<i class="fa fa-code"></i>
					<span>PROJE YÖNETİMİ</span>
				</div>
									<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '9' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) {
?>																						
				<div id="staff_case">
					<div id="avatar">
						<img style="margin-top: -15px;margin-left:3px" src="http://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&action=wlk&size=m&gesture=sml" />
					</div>
					<div class="name"><?php echo $sql['username']; ?></div>
					<div class="work"><?php echo $sql['work']; ?></div>
				</div>
							<?php } ?>
																																										
			
				</div>														
			
			<div class="box">
				<div id="title">
					<i class="fa fa-cogs"></i>
					<span>TOPLULUK YÖNETİCİLERİ</span>
				</div>
													<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '8' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) {
?>																						
				<div id="staff_case">
					<div id="avatar">
						<img style="margin-top: -15px;margin-left:3px" src="http://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&action=wlk&size=m&gesture=sml" />
					</div>
					<div class="name"><?php echo $sql['username']; ?></div>
					<div class="work"><?php echo $sql['work']; ?></div>
				</div>
							<?php } ?>
																																																										
				</div>
			
			<div class="box">
				<div id="title">
					<i class="fa fa-gavel"></i>
					<span>TOPLULUK GÖREVLİLERİ</span>
				</div>
																	<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '6' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) {
?>																						
				<div id="staff_case">
					<div id="avatar">
						<img style="margin-top: -15px;margin-left:3px" src="http://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&action=wlk&size=m&gesture=sml" />
					</div>
					<div class="name"><?php echo $sql['username']; ?></div>
					<div class="work"><?php echo $sql['work']; ?></div>
				</div>
							<?php } ?>
				
																																																										
				</div>
																																					</div>
			<div style="    margin-top: -10px;" class="col grid_12">
		<div class="col grid_8">
			<div class="box">
				<div id="title">
					<i class="fa fa-support"></i>
					<span>UZMAN</span>
				</div>
																	<?php
$hm_staffs = mysql_query("SELECT * FROM users WHERE rank = '4' ORDER BY online DESC"); 
while ($sql = mysql_fetch_assoc($hm_staffs)) {
?>																						
				<div id="staff_case">
					<div id="avatar">
						<img style="margin-top: -15px;margin-left:3px" src="http://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&head_direction=3&action=wlk&size=m&gesture=sml" />
					</div>
					<div class="name"><?php echo $sql['username']; ?></div>
					<div class="work"><?php echo $sql['work']; ?></div>
				</div>
							<?php } ?>
																																																											
				</div>
											
	
		</div>
		<div style="               margin-top: -680px;
    margin-left: 780px;
"class="col grid_4">
			
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</div>
</div>

</html>

<?php include('./templ/footer.php'); ?>

					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>