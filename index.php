<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="512x512" href="images/app.png">
    <link rel="icon" href="images/app.png">
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="index.js" type="text/javascript"></script>	
    <title>Online App Store</title>
</head>
<body>
	<nav id="nav">
		<span id="navtop">
			<button id="closenavbtn" onclick="close1()">☰</button>
			<img id="navlogo" src="images/appstore.png">
		</span>
		<div id="navmain">
			<span class="navcontent" id="apps">
				<img id="appimg" src="images/appsicon.png">
				<b id="appb">Apps</b>
			</span>
			<br>
			<span class="navcontent" id="topcharts">
				<img id="topchartsimg" src="images/list.png">
				<b id="topchartsb">Top Charts</b>
			</span>
			<br>
			<span class="navcontent" id="create">
				<img id="createimg" src="images/upload.png">
				<b id="createb">Create App</b>
			</span>
		</div>
	</nav>
	<header id="header">
		<div id="maintop">
			<button type="button" id="navbtn" onclick="open1()">☰</button>
			<img id="logo" src="images/appstore.png">
			<button id="searchbtn" onclick="search()"><img width="50px" height="auto" src="images/search.png"></button>
		</div>
		<span id="form">
			<form>
				<input list="searchdata" id="search" type="text" name="search" placeholder=" Search Apps" autocomplete="off">
				<datalist id="searchdata">
					<option id="data1" value="linton radio">
					<option  id="data2" value="bauman financial">
					<option  id="data3" value="katy jeans">
				</datalist>
			</form>
			<button id="searchclose" onclick="closesearch()"><img width="45px" height="auto" src="images/exit.png"></button>
		</span>
	</header>
		<main id="main">
			<div id="featured">
				<iframe scrolling="no" width="100%" height="85%" id="frame" frameborder="0px" src="frames/main.php"></iframe>
			</div>
		</main>
	</body>
</html>