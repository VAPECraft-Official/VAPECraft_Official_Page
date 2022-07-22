<!DOCTYPE HTML>
<html>
	<head>
		<title>公告 · VAPECraft 小游戏服务器 | Minecraft Server</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
		    .container {
            display: flex;
            justify-content: center;
            align-items: center;
		    }
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>新一代的<br />
						我的世界服务器</h1>
						<p>VAPECraft 是中国大陆新一代小游戏服务器。支持 1.8-1.17 版本加入。无正版验证。高仿 Hypixel 服务器。</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">VAPECraft</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.html">VAPECraft 介绍</a></li>
							<li><a href="elements.html">加入服务器</a></li>
							<li><a href="generic.html">玩家游玩手册</a></li>
							<li><a href="elements.html">管理手册</a></li>
						</ul>
						<ul class="icons">
									<li><a href="https://www.douyin.com/user/MS4wLjABAAAA9ztFtq_nJxsQYMReLMLXO3pbapqoHQ96N2skKlRrwAc"><span class="label">抖音</span></a></li>
									<li><a href="notice.php"><span class="label">公告</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
                    <h2>公告</h2>
                    <h5><?php echo file_get_contents("api/notification/notice.txt"); ?></h5>
					</div>
</div>
				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; VAPECraft</li><li>Contact: <a href="mailto:backser@outlook.com">Click me</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="//code.tidio.co/j02u7yyd7it7ecejc1ijgrh5a6sbycai.js" async></script>
	</body>
</html>
