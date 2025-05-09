<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------------------------------------------------------------------ Librerias necesarias para el funcionamiento del contador  -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap TouchSpin -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.1/jquery.bootstrap-touchspin.min.css">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.1/jquery.bootstrap-touchspin.min.js"></script>

    <!-- CSS de este doc  -->
    <link rel="stylesheet" href="./CSS/contenido.css">

</head>

<body>

    <!-- /**
     * - El contenedor principal tiene la clase "contenido" y está estructurado utilizando el sistema de grillas de Bootstrap.

     * - Dentro del formulario, hay dos secciones principales:
     *   - La primera sección (de 8 columnas de ancho) incluye el contenido de "productos.php", 
     *     que maneja un componente filas con los productos comprar.
     *   - La segunda sección (de 4 columnas de ancho) incluye el contenido de "factura.php", 
     *     que generara la factura resultante de todos los productos elegidos.

     * - El formulario utiliza el método POST para el envío de datos, pero el atributo action está vacío, 
     *   lo que significa que el formulario se enviará a la misma página.
     */ -->
    <div class="container contenido">

        <form action="" method="post">
            <div class="row">
                <div class="col-md-8">
                    <?php include("./componentes/productos.php"); ?> 
                </div>
                <div class="col-md-4">
                    <?php include("./componentes/factura.php"); ?>
                </div>
            </div>
        </form>

    </div>
</body>

</html>