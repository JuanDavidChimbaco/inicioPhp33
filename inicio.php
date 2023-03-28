<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicio</h1>
       <form action="respuesta.php" method="post">
        <label for="">Nombre: </label>
        <input type="text" name="txtNombre" id="txtNonbre">
        <br>
        <label for="">Apellido: </label>
        <input type="text" name="txtApellido" id="txtApellido">
        <br>
        <label for="">Edad: </label>
        <input type="number" name="txtEdad" id="txtEdad">
        <br>
            <select name="txtDia" id="">
                <option value="">Seleccione Dias</option>
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
            </select>
        <br>
        <label for="">Mañana</label>
        <input type="radio" name="radJornada" id="" value="mañana">
        <label for="">Tarde</label>
        <input type="radio" name="radJornada" id="" value="tarde">
        <label for="">Noche</label>
        <input type="radio" name="radJornada" id="" value="noche">
        <br>
            <label for="">Jugar Futbol</label>
            <input type="checkbox" name="checkPasatiempo[]" id="" value="Jugar Futbol">
            <label for="">Bicicleta</label>
            <input type="checkbox" name="checkPasatiempo[]" id="" value="Bicicleta">
            <label for="">Bailar</label>
            <input type="checkbox" name="checkPasatiempo[]" id="" value="Bailar">
            <label for="">Nadar</label>
            <input type="checkbox" name="checkPasatiempo[]" id="" value="Nadar">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>