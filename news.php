<?php 
require('./inc/core.php');
require('./inc/session.php');
?>

<?php
$title = "Kabbo :: Haberler";

$newsid = Escape($_GET['newsid']);

$newss = mysql_query("SELECT * FROM cms_news WHERE id = '".$newsid."'") or die(mysql_error());
$newscheck = mysql_num_rows($newss);

if($newscheck == "1"){
	$news = mysql_fetch_assoc($newss);
	$title = "newsler :: ".xEscape($news['title'])."";
} else {
	$newss = mysql_query("SELECT * FROM cms_news ORDER BY ID DESC") or die(mysql_error());
	$news = mysql_fetch_assoc($newss);
	$newsid = $news['id'];

}

$getlikes = mysql_fetch_assoc(mysql_query("SELECT SUM(vote_like) AS vote_like FROM cms_news_vote WHERE id_news = '".$newsid."'"));
$dislikes = mysql_fetch_assoc(mysql_query("SELECT SUM(vote_unlike) AS vote_unlike FROM cms_news_vote WHERE id_news = '".$newsid."'"));
$votecheck = mysql_query("SELECT * FROM cms_news_vote WHERE id_news = '".$newsid."' AND id_user = '".$myrow['id']."'") or die (mysql_error());


if(isset($_POST['like'])) {
	
	if(mysql_num_rows($votecheck) == 0) {
		mysql_query("INSERT INTO cms_news_vote SET id_user = '".$myrow['id']."', id_news = '".$newsid."', vote_like = '1', vote_unlike = '0'") or die(mysql_error());
		header("Location: $path/news/$newsid"); exit;

	}
}

if(isset($_POST['dislike'])) {
	
	if(mysql_num_rows($votecheck) == 0) {
		mysql_query("INSERT INTO cms_news_vote SET id_user = '".$myrow['id']."', id_news = '".$newsid."', vote_like = '0', vote_unlike = '1'") or die(mysql_error());
		header("Location: $path/news/$newsid"); exit;

	}
}


?>



<html>
    <head>
		<?php require ('./mytempl/head.php'); ?>

    </head>
    <body>
        <?php require ('./mytempl/header2.php'); ?>
            </div>
        </div>
        <div id="wrapper">
            <div id="layout_left">
                <div class="box">
                    <div class="box_title">Son Haberler</div>
					<?php
$sql2 = mysql_query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 50"); 
$i = 1;
while($sql = mysql_fetch_assoc($sql2)) { ?>
<?php if($news['id'] == $sql['id']) { ?>
                                                <div class="void_long" style="height:auto;">
                                <div class="padding">
                                    <a href="<?php echo $path; ?>/news/<?php echo $sql['id']; ?>">
                                        <div class="news_list" style="font-size:14px">
                                           <?php echo $sql['title']; ?></div>
                                    </a>
                                </div>
                            </div>
							<?php } else { ?>
                                                        <div class="void_long" style="height:auto;">
                                <div class="padding">
                                    <a href="<?php echo $path; ?>/news/<?php echo $sql['id']; ?>">
                                        <div class="news_list" style="font-size:14px">
                                            <?php echo $sql['title']; ?></div>
                                    </a>
                                </div>
                            </div>
							<?php } ?>
<?php } ?>
                                            </div>
            </div>
            <div id="layout_right">
                <div class="box">
                                                        <div class="box_title"><?php echo $news['title']; ?></div>
                                <div class="padding">
                                    <div class="news_date"> <?php echo date('d.m.Y', $news['published']); ?></div>
                                    <div class="news_content"><?php echo $news['longstory']; ?>
</div><div id="like">
<span><?php echo (($getlikes['vote_like'] == null) ? '0' : $getlikes['vote_like']); ?> Likes, <?php echo (($dislikes['vote_unlike'] == null) ? '0' : $dislikes['vote_unlike']); ?> Dislike</span>
<div id="likeinputs" style="<?php if(mysql_num_rows($votecheck) > 0) { echo 'opacity:0.5;'; } ?>">
<form method="POST">
<input style="background-color: green;
    font-size: 17px;
    border: 1px solid white;
    color: white;" class="likebttn" type="submit" name="like" value="Beğen" <?php if(mysql_num_rows($votecheck) > 0) { echo 'disabled'; } ?> />
<input style="
    background-color: maroon;
    font-size: 17px;
    border: 1px solid white;
    color: white;
" class="likebttn" type="submit" name="dislike" value="Beğenme" <?php if(mysql_num_rows($votecheck) > 0) { echo 'disabled'; } ?> />
</form>
</div>
                                    <div class="news_author">Yazan: <b style="
    color: #0e5b6d;
    text-shadow: 0px 1px 10px rgba(181, 219, 251, 0.46);
    background: url(/gallery/images/brill.gif);
"><?php echo $news['author']; ?></b></div>
                                </div>
                                                    </div>
                </div>
            </div>
            <div class="large_spacer"></div>
            <div class="footer">
                <div class="padding">
                    <center class="footertext">
					<?php require ('./mytempl/footer.php') ?>
                </div>
            </div>
        </div>
    </body>
</html>