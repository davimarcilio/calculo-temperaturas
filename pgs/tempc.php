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
$temp = $_POST['temp'];
$fh = (9 * $temp + 160) / 5;
$k = ($temp + 273.15);
?>
<h1 class="temperara"><?php echo $temp?>°C </h1>
<h2 class="temperara"><?php echo $fh?>°F</h2>
<h2 class="temperara"><?php echo $k?>K</h2>
<a href="?pagina=home"><div class="back">Voltar</div></a>
</body>
</html>