<?php

require_once "tiendaVirtual.php";
require_once "productos.php";
require_once "perecederos.php";
require_once "eventos.php";
require_once "sesiones.php";
require_once "mixtos.php";
require_once "normales.php";

$tienda = [];
$tienda[] = new Productos("Cyclone 23",89.99,"Aspiradora","Braun",4250,3300);
$tienda[] = new Productos("PlayStation 4",299.99,"Consola","Sony",3150,1575);
$tienda[] = new Perecederos("Platano",2.50,"De canarias","Canarias",1200,700,"2023-11-10");
$tienda[] = new Perecederos("Papaya",3.20,"De canarias","Canarias",1525,830,"2023-11-16");
$tienda[] = new Perecederos("Tomate",1.80,"De canarias","Canarias",1200,495,"2023-12-08");
$tienda[] = new Eventos("Concierto",19.99,"Concierto de pepe benavente","2023-11-05");
$tienda[] = new Eventos("Teatro",35.99,"La bella y la bestia","2023-11-13");
$tienda[] = new Eventos("Concierto",29.99,"Concierto de Eminem","2023-12-13");
$tienda[] = new Sesiones("Piano",65.99,"Clases de piano",2);
$tienda[] = new Sesiones("Guitarra",39.99,"Clases de guitarra",0);
$tienda[] = new Mixtos("Yoga",25.00,"Clases de yoga",5,"2023-12-13");
$tienda[] = new Mixtos("Gimnasio",99.99,"Gimnasio con entrenador",2,"2023-11-10");
$tienda[] = new Normales("Disco",15.99,"Album de eminem");
$tienda[] = new Normales("Pelicula",13.99,"Need for Speed");

