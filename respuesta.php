<?php
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $edad = $_POST['txtEdad'];
    $dia = $_POST['txtDia'];
    $jornada = $_POST['radJornada'];
    $pasatiempo = $_POST['checkPasatiempo'];

    echo" Nombre: $nombre <br> Apellido: $apellido";
    echo"<br> Edad: $edad";
    if ($edad >= 18) {
        echo " Mayor de Edad";
    } else {
        echo " Menor de Edad";
    }
    echo "<br>Jornada: $jornada <br> Dia: $dia";
    
    foreach ($pasatiempo as $key => $value) {
        echo "<br>Pasatiempo : ". $key + 1 ." $value <br>";
    }
    echo "</br>";
    //var_dump($_POST);
    //print_r($_POST);

/*$fruta = array(
    "Dulce" => "mango",
    "Acida" => "limon",
    "Diuretica" => "Piña",
    "Afrodiciaca" => "borojo"
);*/

/**
 * Arrglo Asociativo
 */
$fruta = [
    "Dulce" => "mango",
    "Acida" => "limon",
    "Diuretica" => "Piña",
    "Afrodiciaca" => "borojo"
];


foreach ($fruta as $key => $value) {
    echo "Fruras de tipo $key : $value <br>"; 
}
echo "</br>";
/**
 * arreglo Normal
 */
$numeros = [23,"Años",10.2,true];

foreach ($numeros as $key => $value) {
    echo "$key : $value <br>"; 
}

echo "</br>";

echo $fruta["Dulce"];

print("<br>");

unset($numeros[2]); //no re-indexa 
print_r(array_values($numeros)); // re organiza los index del arreglo
print("<br>");
print_r($numeros);


print("<br>");
$no = "Texto Normal";
echo is_array($no) ? 'Array' : 'No es un array';
//$resulatado = $condicion ? 'verdadero' : 'false'; Operador ternario
print("<br>");
echo 3 > 5 ? "mayor" : "menor" ;

?>