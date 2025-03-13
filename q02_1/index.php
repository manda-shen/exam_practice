<?php include_once "api/db.php";
// echo $_SESSION['login'];
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>健康促進網</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>

<body>
	<div id="alerr"
		style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
		<pre id="ssaa"></pre>
	</div>
	<div id="all">
		<div id="title">
			<?php
			// echo date("m");
			?>
			
			<?=date("m 月 d 號 l");?> | 今日瀏覽: <?=$Total->find(['date'=>date("Y-m-d")])['total'];?>
			                          | 累積瀏覽: <?=$Total->sum('total');?>
			<span style="float:right;"><a href="?">回首頁</a></span>
		</div>
		<div id="title2">
			<a href="?"><img src="./icon/02B01.jpg" alt="健康促進網 - 回首頁" title="健康促進網 - 回首頁"></a>
		</div>
		<div id="mm">
			<div class="hal" id="lef">
				<a class="blo" href="?do=po">分類網誌</a>
				<a class="blo" href="?do=news">最新文章</a>
				<a class="blo" href="?do=pop">人氣文章</a>
				<a class="blo" href="?do=know">講座訊息</a>
				<a class="blo" href="?do=que">問卷調查</a>
			</div>
			<div class="hal" id="main">
				<div>
					
					<span style="width:82%; display:inline-block;">
					<marquee behavior="" direction="">請民眾踴躍投稿電子報，讓電子報成為大家相互交流、分享的園地！詳見最新文章</marquee>
					<?php

					if(isset($_SESSION['login'])){
						if($_SESSION['login']==1){
					?>					
					<a href="./api/logout.php" style="position:absolute; right:5px;">歡迎，<?=$_SESSION['user'];?><button>登出</button></a>
					<?php
					}else if($_SESSION['login']==2){
					?>
					<a href="./api/logout.php" style="position:absolute; right:5px;"><button>登出</button></a>
					<a href="admin.php" style="position:absolute; right:40px;"><button>返回管理</button></a>
					<?php
					}
					?>
					<?php
					}else{
					?>
					<a href="?do=login" style="position:absolute; right:5px;">會員登入</a>
					<?php
					}
					?>
					</span>
					<div class="">
					</div>
				</div>
				<?php
				$do=$_GET['do']??'main2';
				$file="front/".$do.".php";
				include $file;
				?>
			</div>
		</div>
		<div id="bottom">
			<div style="position:absolute;top:-20px;right:60px; width:900px">
				<pre>
本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2025健康促進網社群平台 All Right Reserved
服務信箱：health@test.labor.gov.tw
				</pre>

			</div>
			<div style="position:absolute;top:-10px;right:10px;"><img src="./icon/02B02.jpg" width="45"></div>
		</div>
	</div>

</body>

</html>