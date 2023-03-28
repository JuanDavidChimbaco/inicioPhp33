<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pokemon</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ingresar Pokemones a DB</h1>
        <div class="row text-center">
            <div class="col-12">
                <form id="mi-formulario" >
                    <div class="form-control">
                        <label for="txtnombre" class="form-label">Nombre del Pokemon</label><br>
                        <input type="text" name="txtNombre" id="txtNombre">
                    </div>
                    <div class="form-control">
                        <label for="txtCodigo" class="form-label">Codigo del Pokemon</label><br>
                        <input type="number" name="txtCodigo" id="txtCodigo">
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Agregar Pokemon" id="registrar" class="btn btn-primary">
                    </div>
                </form>
                <script src="Script.js"></script>
                <div id="resultado" class="bg-dark text-white" style="display: none;">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>