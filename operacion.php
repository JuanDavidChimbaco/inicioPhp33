<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];

$sql = "insert into prueba (nom_prueba,codigo_prueba) values('$nombre',$codigo);";

$data = $coneccion->prepare($sql);  // -> acceder a metodos de la Clase
$data->execute();

if ($data){
    echo "\nPokemon ingresado correctamente.";
}else{
    echo "\nPokemon no ingresado.";
}


echo "\n\t<a href='index.php' class='btn btn-primary'> OK! </a>";

?>