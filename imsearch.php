<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Suchen - Hello-Christmas-2018</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Sharkbyteprojects" />
		<meta name="generator" content="Incomedia WebSite X5 Evolution 13.1.8.23 - www.websitex5.com" />
		<meta property="og:image" content="https://hello-christmas-2018.github.io/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="794">
		<meta property="og:image:height" content="794">
		<meta name="viewport" content="width=960" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-1-8-23" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-1-8-23" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-1-8-23" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-1-8-23" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-1-8-23" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-1-8-23-636803185043829174" media="screen,print" />
		<script type="text/javascript" src="res/jquery.js?13-1-8-23"></script>
		<script type="text/javascript" src="res/x5engine.js?13-1-8-23" data-files-version="13-1-8-23"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?13-1-8-23-636803185043829174" type="image/png" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Suchen - Hello-Christmas-2018</h1>
				<div id="imHeaderObjects"></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Homepage</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode7" class=" imLevel">
						<span class="imMnMnFirstBg">
							<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Script</span></span>
						</span>
				<ul class="auto">
					<li id="imMnMnNode3" class="imMnMnFirst imPage">
						<a href="script.html">
							<span class="imMnMnBorder">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Script</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode8" class="imMnMnMiddle imPage">
						<a href="js-test.html">
							<span class="imMnMnBorder">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">JS TEST</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode6" class="imMnMnLast imPage">
						<a href="pdf.html">
							<span class="imMnMnBorder">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">PDF</span></span>
							</span>
						</a>
					</li></ul></li>
				<li id="imMnMnNode5" class=" imPage">
						<a href="quellcode.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Quellcode</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Search results</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imObjectTitle_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imObjectTitle_01"><span id ="imFooter_imObjectTitle_01_text"><a href="https://raw.githubusercontent.com/Hello-Christmas-2018/data/master/LICENSE" onclick="return x5engine.utils.imPopUpWin('https://raw.githubusercontent.com/Hello-Christmas-2018/data/master/LICENSE','imPopUp', 800,600);">License</a> </span > </div></div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Remain on this page">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
