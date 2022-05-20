<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperaturas</title>
</head>
<body>
<?php 
$k = $_POST['k'];
$ktoc = $k - 273.15;
$ktof = ($k - 273.15) * 9/5 + 32; 
?>
<h2 class="temperara"><?php echo $k?>K</h2>
<h1 class="temperara"><?php echo $ktoc?>°C </h1>
<h2 class="temperara"><?php echo $ktof?>°F</h2>
<a href="?pagina=home"><div class="back">Voltar</div></a>
</body>
</html>