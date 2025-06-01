<html>

    <head>
        <!-- css -->
         <link rel="stylesheet" href="estilos.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">. 
    </head>

    <body>
       <!-- contenido -->
        <h3>Identificación</h3>
        <input type="text" id="txtIdentificacion" class= "form-control">

        <input type="button" class= "btn btn-primary" value="Consultar" 
               onclick="ConsultarNombre();">

        <input type="text" id="txtNombre" class= "form-control" readOnly="true">
    
    </body>
    <!-- JS -->
          <script src="funciones.js"></script>
</html>