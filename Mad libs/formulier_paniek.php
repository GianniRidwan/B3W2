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
					<li><a href="formulier_paniek.php">Er heerst paniek...</a></li>
					<li><a href="formulier_onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
	</div>

	<div class="content">
		<h1 class="headline">Er heerst paniek...</h1>

		<?php 

			$questions = array("Welk dier zou je nooit als huisdier willen hebben?", 
			"Wie is de belangrijkste persoon in je leven?", 
			"In welk land zou je graag willen wonen?", 
			"Wat doe je als je je verveelt?", 
			"Met welk speelgoed speelde je als kind het meest?", 
			"Bij welke docent spijbel je het liefst?", 
			"Als je € 100.000,- had, wat zou je dan kopen?", 
			"Wat is je favoriete bezigheid?");

		?>
		
		<form action="resultaat_paniek.php" method="post">
			<p>
				<?php 
					for($i = 0; $i < 8; $i++){
						echo $questions[$i];
				?>
					<input type="text" name="result[]"><br><br>
					
				<?php
					}
				?>	 
				<input type="submit" value="Versturen">
			</p>
		</form>
		
	</div>
	<footer>&#169; Gianni 2022</footer>
</body>
</html>