<!DOCTYPE html>
<html>
	<head>
		<!-- ___________________________ Jquery v3.2.1 Link _____________________________________ -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------------------------------------------------------------------------------------------>
		<!-- _______________________ JavaScript Bootstrap v4.1.1 file ___________________________ -->
		<script type="text/javascript" src="extension/bootstrap.js"></script>
		<!------------------------------------------------------------------------------------------>
		<!-- ___________________________ CSS Bootstrap v4.1.1 file ______________________________ -->
		<link rel="stylesheet" type="text/css" href="extension/bootstrap.css">
		<!------------------------------------------------------------------------------------------>
		<!-- ______________ Title ______________ -->
		<title>PickUp.in</title>
		<!----------------------------------------->
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		<!-- __________________________ ITC Bauhaus Font Import __________________________________ -->
		<link href="//db.onlinewebfonts.com/c/390289fedd068780e28c0f9f259c3782?family=ITC+Bauhaus" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			@import url(//db.onlinewebfonts.com/c/390289fedd068780e28c0f9f259c3782?family=ITC+Bauhaus);
			@font-face {font-family: "ITC Bauhaus";
		    src: url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.eot");
		    src: url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.eot?#iefix") format("embedded-opentype"),
		    url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.woff2") format("woff2"),
		    url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.woff") format("woff"),
		    url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.ttf") format("truetype"),
		    url("//db.onlinewebfonts.com/t/390289fedd068780e28c0f9f259c3782.svg#ITC Bauhaus") format("svg");
}
		</style>
		<!------------------------------------------------------------------------------------------>
		<style type="text/css">
			#content {
				background: url(img/bg1.png);
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center;
				height: 900px;
			}
		</style>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="top"></div>
		<div id="content">
		<div id="menubar" class="header">
			<?php
				include("menu.php");	/* Including Navbar code */
			?>
		</div>
		<div class="jumbotron" style="height: 150px; background-color: #55D72F; color: #fff;">
			<img src="img/logo.bmp" alt="Logo" style="width: 100px; height: 100px; position: absolute; top: 65px; left: 8%;">
			<h1 style="position: absolute; left: 40%; top: 65px; font-family: ITC Bauhaus;"> PickUp.In </h1>
			<h5><marquee style="width: 50%; position:absolute; left: 30%; top: 120px; font-family: Berlin;"> Do not waste your stuff's and cloths.Take a small step and donate for someone else..</marquee></h5>
		</div>
		<div>
			<?php
				include("form.php");
			?>
		</div>
	</div>
	<?php
		include 'about.php';
	?>
	<div style="position: fixed; top: 90%; left: 94%;">
		<a href="#top"><img src="img/top.png" style="width: 50px; height: 50px;"></a>
	</div>
	</body>
</html>