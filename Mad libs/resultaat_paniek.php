<!DOCTYPE html>
<html>
<head>
	<title>Paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

	<div class="menu">
		<h1 class="title">Mad Libs</h1>
			<nav>
				<ul>
					<li><a href="paniek.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
	</div>

	<div class="content">
		<h1 class="headline">Er heerst paniek...</h1>

		<p>
			<?php 
				$result = $_POST["result"];
			?>
			Je <?php echo $result[0]; ?> gaat dood en <?php echo $result[1]; ?> wilt je nooit meer zien. <br>
			Je besluit dus te emigreren naar <?php echo $result[2]; ?>. <br>
			Je houd jezelf bezig met <?php echo $result[3]; ?> en <?php echo $result[4]; ?> omdat je toch niks beters te doen hebt. <br>
			Op je nieuwe school word je <?php echo $result[4]; ?> door <?php echo $result[5]; ?>. <br>
			Je koopt <?php echo $result[6]; ?> en bent vooral bezig met <?php echo $result[7]; ?>. <br>
		</p>
    </div>

</body>
</html>