<?php 
session_start()
?>

<html>
<body>
<h3>Your answers:</h3>   
Welcome <?php echo $_POST["name"]; ?><br>
You live in: <?php echo $_POST["place"]; ?><br>
You have  <?php echo $_POST["age"]; ?> years old.<br>
Your zodiac sign is: <?php echo $_POST["zodiac"]; ?><br>
Your favorite color is: <?php echo $_POST["color"];?><br>
<br>

<?php 
//Configurem per a que el nom es guardi com a variable global dins de session:
$_SESSION["name"] = $_POST["name"];

//Accedim a la variable global:
echo "Your name is " . $_SESSION["name"] . ".<br>";
?>
</body>
</html>