<?php
require_once "tiendaVirtual.php";
require_once "productos.php";
require_once "perecederos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Prueba</h1>
  <?php
    $tienda1 = new TiendaVirtual("jamon",100,"x");
    echo "<p>" . $tienda1->show() . "</p>";
    echo "<p>" . $tienda1->changeTax(10) . "</p>";
    echo "<p>" . $tienda1->calculatePrice() . "</p>";
    $producto1 = new Productos("papaya",89.99,"x","canarias",4250,3300);
    echo "<p>" . $producto1->show() . "</p>";
    echo "<p>" . $producto1->shippingCost() . "</p>";
    $perecedero1 = new Perecederos("platano",50,"x","canarias",20,10,"2023-10-12");
    echo "<p>" . $perecedero1->show() . "</p>";
    echo "<p>" . $perecedero1->shippingCost() . "</p>";
    echo "<p>" . $perecedero1->expired() . "</p>";
    echo "<p>" . $perecedero1->daysToExpire() . "</p>";
  ?>
</body>
</html>