<?php 
$name = $_REQUEST['name'] ?? null;
$email = $_REQUEST['email'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hola, <?php echo $name; ?></h1>
  <p>Tu email es: <?php echo $email; ?></p>
</body>
</html>