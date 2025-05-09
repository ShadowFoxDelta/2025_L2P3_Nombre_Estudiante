<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

    <!--                                                ENCABEZADO                               
    *Inclusion del encabezado-->
    <?php include("./componentes/productos/encabezado.html"); ?>



    <!--                                                CATEGORIAS   -->

    <!-- /**
     * Este archivo genera una lista de productos colapsable categorizada en tres secciones: 
     * "Cuadernos", "Bolígrafos" y "Accesorios". Cada sección incluye una fila con funcionalidad 
     * de colapso para expandir o contraer su contenido.
     *
     * Secciones:
     * 1. Cuadernos:
     *    - Una sección colapsable para productos de "Cuadernos".
     *    - Incluye un archivo HTML externo: "productos/cuadernos.html".
     *
     * 2. Bolígrafos:
     *    - Una sección colapsable para productos de "Bolígrafos".
     *    - Incluye un archivo HTML externo: "productos/boligrafos.html".
     *
     * 3. Accesorios:
     *    - Una sección colapsable para productos de "Accesorios".
     *    - Incluye un archivo HTML externo: "productos/accesorios.html".
     *
     * Estructura:
     * - Cada categoría está representada por una fila con un botón de alternancia.
     * - Al hacer clic en el botón de alternancia, se expande o contrae el contenido asociado.
     * - El contenido de cada categoría se carga desde un archivo HTML externo.
     *
     * Dependencias:
     * - Se utilizan clases de Bootstrap para el diseño y la funcionalidad de colapso.
     * - Se emplean Glyphicons para los íconos de alternancia.
     *
     * Notas:
     * - Asegúrese de que los archivos HTML incluidos existan en el directorio "productos".
     * - Verifique que Bootstrap y Glyphicons estén correctamente cargados en el proyecto.
     */ -->

    <!------------------------------------------------------- CUADERNOS   ------------------------------------------->
    <!-- Botón de alternancia-->
    <div class="row toggle-row" data-toggle="collapse" data-target="#CuadernosCollapse">
        <div class="col-4 font-weight-bold">Cuadernos</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="CuadernosCollapse">
        <div class="card card-body">
            <?php include("./componentes/productos/cuadernos.html"); ?>
        </div>
    </div>



    <!--------------------------------------------------------  BOLIGRAFOS   -------------------------------------------->
    <!-- Botón de alternancia -->
    <div class="row toggle-row" data-toggle="collapse" data-target="#BoligrafosCollapse">
        <div class="col-4 font-weight-bold">Bolígrafos</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="BoligrafosCollapse">
        <div class="card card-body">
            <?php include("./componentes/productos/boligrafos.html"); ?>
        </div>
    </div>



    <!--------------------------------------------------------  ACCESORIOS   -------------------------------------------->
    <!-- Botón de alternancia -->
    <div class="row toggle-row" data-toggle="collapse" data-target="#AccesoriosCollapse">
        <div class="col-4 font-weight-bold">Accesorios</div>
        <div class="col-3"></div>
        <div class="col-3 text-right">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </div>
    </div>
    <!-- Contenido Colapsable -->
    <div class="collapse" id="AccesoriosCollapse">
        <div class="card card-body">
            <?php include("./componentes/productos/accesorios.html"); ?>
        </div>
    </div>


</body>

<!-- Script que permite que al tocar los spinners se muestre en automatico el subtotal de los productos -->
<script src="./JS/touch_spinner.js"></script> 

</html>