<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>title</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/style.css">
	<script>
		function bgclick(){
			document.getElementsByTagName('body')[0].style.background = "url(./img/bg2.jpg)";
		}
	</script>
</head>
<body>
	<div class="wrap">
		<header id="header"  class="clearfix"><a href="./">logo</a>
			<ul class="clearfix">
				<li <?if($sub_menu == 1) {echo "class=on";}?>><a href="./sub01.php">menu1</a></li>
				<li <?if($sub_menu == 2) {echo "class=on";}?>><a href="./sub02.php">menu2</a></li>
				<li <?if($sub_menu == 3) {echo "class=on";}?>><a href="./sub03.php">menu3</a></li>
			</ul>
			<button onclick="bgclick()">이미지1</button>
		</header>
		