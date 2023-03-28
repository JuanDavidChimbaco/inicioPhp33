<?php
//include("conexion.php");// advenrtencia, no se detiene la ejecucion , puedo llamar varias veces al archivo.
//include_once()//solo pone una vez el archivo.

//require()//error,deteniene la ejecucion del codigo, puede llamar varios 
//require_once()

include "conexion.php";

/*$nombre = "sidock";
$codigo = 60;

$sql = "insert into prueba (nom_prueba,codigo_prueba) values('$nombre',$codigo);";
$data = $pdo->prepare($sql);
$data->execute();*/

$sql = "SELECT * FROM prueba";

$data = $coneccion->prepare($sql);  // -> acceder a metodos de la Clase
$data->execute();
$info = $data->fetchAll(PDO::FETCH_ASSOC);
echo "\n";
print_r($info);


foreach ($info as $key => $value) {
    # code...
    foreach ($value as $key => $value2) {
        # code...
        echo "<p> $key: $value2</p>";
    }
    
}

$resultado = $coneccion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lista de Poquemones</title>
</head>
<body>
  <h1>Lista de Pokemones</h1>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Codigo</th>
    </tr>
    <?php
    // Recorre el resultado y muestra los registros
    foreach ($resultado as $registro) {
      echo "<tr>";
      echo "<td>" . $registro['nom_prueba'] . "</td>";
      echo "<td>" . $registro['codigo_prueba'] . "</td>";
      echo "<tr>";
    }
?>