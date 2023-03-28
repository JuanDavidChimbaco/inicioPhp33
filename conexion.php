<?php
$host = 'localhost';
$dbname = 'pokemon33';
$username = 'root';
$password = '';
    try {
        //code...
        $coneccion = new PDO("mysql:dbname=$dbname;host=$host", $username,$password);
        if ($coneccion) {
            # code...
            echo "Conectado a $dbname en $host con éxito !\n";
        }
    } catch (PDOException $e) {
        //throw $th;
        die("Error: No se Pudo conectar".$e->getCode());
    }
    unset($pdo);
?>
