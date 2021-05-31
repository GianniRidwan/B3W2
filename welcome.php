<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 

$name = $mail = "";
$nameErr = $mailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
  	$nameErr = "Name is required";
  } else {
  	$name = test_input($_POST["name"]);
  }

  if (empty($_POST["mail"])) {
  	$mailErr = "Email is required";
  } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
  	$mailErr = "Email is not a valid email addres";
  } else {
  	$mail = test_input($_POST["mail"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<?php if(empty($name) || empty($mail)){ ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
	Naam: <input type="text" name="name" value="<?php echo $name ?>">
	<span class="error">* <?php echo $nameErr;?></span><br>
	Email: <input type="email" name="mail" value="<?php echo $mail ?>">
	<span class="error">* <?php echo $mailErr;?></span><br>
	<input type="submit" value="Verzenden">
</form>
<?php } ?>
<?php 
	echo "<h1>De ingevulde gegevens zijn:</h1>";
	echo "<p>Naam: $name</p>";
	echo "<p>Emailadres: $mail</p>";	
?>

</body>
</html>