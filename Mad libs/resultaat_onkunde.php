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

        <p>
            <?php 
                $result = $_POST["result"];
            ?>
            Er zijn veel mensen die niet kunnen <?php echo $result[0]; ?>. Neem nou meneer <?php echo $result[1]; ?>.
            Zelfs met de hulp van een <?php echo $result[3]; ?> of zelfs <?php echo $result[2]; ?> kan meneer <?php echo $result[1]; ?> 
            niet <?php echo $result[0]; ?>. Dat heeft niet te maken met het gebrek aan <?php echo $result[5]; ?>, maar met een te veel aan <?php echo $result[4]; ?>. 
            Te veel <?php echo $result[4]; ?> leidt tot <?php echo $result[6]; ?> en dat is niet goed als je wilt <?php echo $result[0]; ?>. 
            Helaas voor meneer <?php echo $result[1]; ?>.
        </p>
    </div>

</body>
</html>