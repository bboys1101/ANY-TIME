<!DOCTYPE html>
<html lang="en" ng-app>

<head>

	<!-- HTML meta 設定（必填） -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-language" content="zh-tw" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="google-site-verification" content="" />
	<meta name="description" content="即時查詢最佳日幣匯率">
	<meta name="author" content="25sprout, LLC. 新芽網路有限公司">
	<meta name="copyright" content="網站版權聲明">
	<meta name="keywords" content="日幣匯率, 日幣, 匯率, 日本, 東京" />
	<meta name="URL" content="網站連結">
	<meta name="image" content="images/thumbnail.jpg" />
	
	<meta name="og:image" content="images/thumbnail.jpg">
	<meta name="og:description" content="即時查詢最佳日幣匯率">

	<!-- 網站標題 & Favicon &  -->
	<title>AN¥ TIME | Always Looking For Best Currency</title>
	<link rel="shortcut icon" href="images/favicon.png" >

	<!-- jQuery -->
	<script type="text/javascript" src="library/jquery/jquery-1.9.0.min.js"></script>

	<!-- jQuery UI -->
	<link type="text/css" rel="stylesheet" href="library/jquery-ui/css/ui-lightness/jquery-ui-1.10.0.custom.css">
	<script type="text/javascript" src="library/jquery-ui/js/jquery-ui-1.10.0.custom.min.js"></script>

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="library/bootstrap/js/bootstrap.min.js"></script>

	<!-- google font -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	
	<!-- font awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Validate -->
	<script type="text/javascript" src="library/jquery.validate.js"></script>

	<!-- Entypo -->
	<link type="text/css" rel="stylesheet" href="library/entypo/font-face.css">

	<!-- My Style -->
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://code.angularjs.org/1.4.0/angular.js"></script>





	<!-- jQuery Textarea Autosize -->
	<script type="text/javascript" src="library/jquery-autosize/jquery.autosize-min.js"></script>
	<script>
		$(document).ready(function(){
			$('textarea').autosize();  
		});
	</script>

	<!-- for jQuery Smooth Anchors START (一頁式網頁滾動 + 網址記錄) -->
	<script type="text/javascript" src="library/smooth-anchors/SmoothAnchors.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// Select Navi 裡的按鈕連結 a, EX: <a href="#section-1"></a>
			// 內容的 Section Div, EX: <div class="section-1"></div>
			//$('navi-wrapper a').SmoothAnchors();
		});
	</script>

	<!-- Google Analytics ***** 務必更新 GA Account No# *****-->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-31519246-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

