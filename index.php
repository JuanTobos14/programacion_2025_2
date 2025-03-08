<?php
echo "Palabra al azar";
echo '<br>';
echo "Auxilio";

$nombre = 'Pepe';
$apellido = "Perez";
echo '<br> Largate '.$nombre.' '.$apellido;
echo "<br>Regresa $nombre $apellido";
$edad = 25;
$estatura = 1.65;
$mayorEdad = true; //false
/**
 * bloque...
 */
$prueba = null;
$puebra = array(1, 2, 3, 4, 5, 6);
$prueba = [1, 2.6, 3, true, 5, "a"];
echo '<br>'.$prueba[2];

$persona = [
    "nombre" => "Kik",
    "apellido" => "Ongas",
    "edad" => 30,
    "numerosSuerte" => [20, 17, 7]
];
echo '<br>'.$persona['nombre'];

/*No es necesario cerrar si solo se trabaja PHP*/
?>

