<!-- /**
 * Este script procesa una solicitud POST para manejar un pedido escolar.
 * 
 * Requiere el archivo 'ClasePedidoEscolar.php', que define la clase `Pedido`.
 * El script realiza los siguientes pasos:
 * 
 * 1. Verifica si el método de la solicitud es POST.
 * 2. Recupera los datos de 'productos' de la solicitud POST, usando un array vacío como valor predeterminado si no se proporciona.
 * 3. Crea una instancia de la clase `Pedido` con los productos proporcionados.
 * 4. Valida que el objeto `Pedido` contenga productos; de lo contrario, lanza una excepción.
 * 5. Muestra el resumen del pedido utilizando el método `mostrarResumen` de la clase `Pedido`.
 * 
 * Si ocurre una excepción durante el procesamiento, la captura y muestra un mensaje de error
 * dentro de un elemento `<div>` estilizado con la clase `summary-row danger`.
 * 
 */ -->
 
<?php
require_once 'ClasePedidoEscolar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

        $productos = $_POST['productos'] ?? [];        //Recupera los datos de 'productos' de la solicitud POST.
        /* Si la clave 'productos' no está definida en los datos POST, se asigna un array vacío por defecto.*/

        $pedido = new Pedido($productos); // Crea una nueva instancia de la clase Pedido con los productos proporcionados.
     
        // Verifica si el pedido tiene productos. Si no, lanza una excepción.
        if (empty($pedido->productos)) {
            throw new Exception("Eligue alguno de los productos para comenzar el pedido.");
        }

        $pedido->mostrarResumen(); // Muestra el resumen del pedido utilizando el método mostrarResumen de la clase Pedido.
    } catch (Exception $e) {
        echo '<div class="summary-row danger">' . htmlspecialchars($e->getMessage()) . '</div>';
    }
} 
