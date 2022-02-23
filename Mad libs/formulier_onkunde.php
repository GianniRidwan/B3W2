<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
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
		<h1 class="headline">Onkunde</h1>

		<?php 

			$questions = array("Wat zou je graag willen kunnen?", 
			"Met welke persoon kun je goed opschieten?", 
			"Wat is je favoriete getal?", 
			"Wat heb je altijd bij je als op vakantie gaat?", 
			"Wat is je beste persoonlijke eigenschap?", 
			"Wat is je slechtste persoonlijke eigenschap?", 
			"Wat is het ergste wat je kan overkomen?");

		?>
		
		<form action="resultaat_onkunde.php" method="post">
			<p>
				<?php 
					for($i = 0; $i < 7; $i++){
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