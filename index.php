<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas</title>
    <link rel="icon"
        href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1 class="top">Calculadora de temperaturas</h1>
  <footer class="baixo">
    <p>Made By Davi.js</p>
  </footer>
</body>
</html>
<?php
if(!isset($_GET['pagina'])){
include ("pgs/home.html");
} else {
  $pagina = $_GET['pagina'];
  switch ($pagina) {
  case "home":
  include ("pgs/home.html");
  break;
  case "tempc":
    include ("pgs/tempc.php");
    break;
    case "tempf":
      include ("pgs/tempf.php");
      break;
      case "tempk":
        include ("pgs/tempk.php");
        break;
    case "c":
      include ("pgs/c.html");
      break;
      case "f":
        include ("pgs/f.html");
        break;
        case "k":
          include ("pgs/k.html");
          break;
  default:
  include ("pgs/home.html");
  
}}
?>