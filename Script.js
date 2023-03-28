$("#registrar").ready(function() {
    var formulario = $('#mi-formulario');
    // Agrega un evento submit al formulario
    formulario.on('submit', function(event) {
        //Previene el comportamiento predeterminado del evento submit
        event.preventDefault();
        
        // Obtiene los datos del formulario
        var datosFormulario = {
            nombre: $('#txtNombre').val(),
            codigo: $('#txtCodigo').val()
        };
        
        // Envía los datos del formulario a través de una solicitud AJAX
        $.ajax({
            url: 'operacion.php',
            method: 'POST',
            data: datosFormulario
        })
        .done(function(response) {
            // Actualiza el contenido del div con la respuesta del servidor
            $('#resultado').html(response);
            // Muestra el div oculto
            $('#resultado').show();
        })
        .fail(function(xhr, status, error) {
            // Maneja los errores de la solicitud AJAX
            console.error(error);
        });
    });
});