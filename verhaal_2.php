<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
		<ul>
			<li><a href="index.php"><h4>Er heerst paniek...</h4></a></li>
			<li><a href="index_2.php"><h4>Onkunde</h4></a></li>
		</ul>
</nav>
<section>
<h1>Onkunde</h1>
<p>Er zijn veel mensen die niet kunnen <?= $_GET['1'] ?>.</p> 
<p>Neem nou <?= $_GET['2'] ?>: zelfs met de hulp van een <?= $_GET['4'] ?> of zelfs <?= $_GET['3'] ?> kan 	   <?= $_GET['2'] ?> niet <?= $_GET['1'] ?>.</p> 
<p>Dat heeft niet te maken met een gebrek aan <?= $_GET['5'] ?>, maar met een te veel aan <?= $_GET['6'] ?>.
</p>  
<p>Te veel <?= $_GET['6'] ?> leidt tot <?= $_GET['7'] ?> en dat is niet goed als je wilt <?= $_GET['1'] ?>.
</p>
<p>Helaas voor <?= $_GET['2'] ?>.</p>
</section>
</body>
</html>