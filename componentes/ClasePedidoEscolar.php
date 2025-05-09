<?php
class Pedido
{
    public $productos = []; // Arreglo para almacenar la lista de productos asociados al pedido escolar.

    /**
     * Constructor de la clase Pedido.
     *
     * Inicializa el objeto con una lista de productos. Cada producto debe ser un
     * arreglo asociativo que contenga las claves 'nombre', 'precio' y 'cantidad'.
     * Solo se añaden a la lista los productos con una 'cantidad' positiva.
     *
     * @param array $productos Un arreglo de productos, donde cada producto es un
     *                         arreglo asociativo con las siguientes claves:
     *                         - 'nombre' (string): El nombre del producto.
     *                         - 'precio' (float): El precio del producto.
     *                         - 'cantidad' (int): La cantidad del producto.
     *
     * @return void no retorna nada.
     */
    public function __construct($productos = [])
    {
        foreach ($productos as $prod) {
            if (isset($prod['nombre'], $prod['precio'], $prod['cantidad']) && $prod['cantidad'] > 0) { // Verifica que el producto tenga las claves necesarias y que la cantidad sea positiva
                $this->productos[] = [
                    'nombre' => $prod['nombre'], // Almacena el nombre del producto
                    'precio' => (float) $prod['precio'], // Almacena el precio del producto como un número de punto flotante
                    'cantidad' => (int) $prod['cantidad'], // Almacena la cantidad del producto como un número entero
                    'subtotal' => (float) $prod['precio'] * (int) $prod['cantidad'] // Calcula el subtotal multiplicando el precio por la cantidad y lo almacena
                ];
            }
        }
    }

    /**
     * Calcula la suma total de todos los subtotales de los productos en el pedido.
     *
     * Este método recorre la lista de productos y acumula sus valores de
     * 'subtotal' para calcular el monto total del pedido.
     *
     * @return float La suma total de todos los subtotales de los productos.
     */
    public function total()
    {
        $suma = 0;
        foreach ($this->productos as $prod) { // Recorre cada producto en la lista de productos
            $suma += $prod['subtotal']; // Suma el subtotal del producto actual a la suma total
        }
        return $suma;
    }

    /**
     * Calcula la cantidad total de productos en el pedido.
     *
     * Este método recorre la lista de productos y suma el campo 
     * 'cantidad' de cada producto para determinar la cantidad total.
     *
     * @return int La cantidad total de todos los productos en el pedido.
     */
    public function cantidadTotal()
    {
        $cantidad_total = 0;
        foreach ($this->productos as $prod) { // Recorre cada producto en la lista de productos
            $cantidad_total += $prod['cantidad']; // Suma la cantidad del producto actual a la cantidad total
        }
        return $cantidad_total; // Retorna la cantidad total de productos
    }

    /**
     * Muestra un resumen del pedido, incluyendo detalles de productos y cálculos totales.
     *
     * Este método genera una estructura HTML para mostrar un resumen del pedido.
     * Incluye una tabla detallada de productos con sus cantidades, precios y subtotales,
     * así como un resumen del número total de artículos, subtotal (sin ITBMS) y el monto total.
     *
     * @return void
     */
    public function mostrarResumen()
    {
        $cantidad_total = $this->cantidadTotal(); // Obtiene la cantidad total de productos en el pedido
        $subtotal = $this->total(); // Calcula el subtotal total del pedido
        $total = $subtotal; // Inicializa el total como el subtotal (sin ITBMS)

        // FACTURA RESUMEN
        echo '<div class="summary-box">'; 
        // DETALLE DE PRODUCTOS
        echo '<div class="product-detail-box mt-4">'; // Crea un contenedor para los detalles de los productos
        echo '<h5>Detalle de productos</h5>'; // Título de la sección de detalles de productos
        echo '<table class="table table-bordered">'; // Crea una tabla para mostrar los detalles de los productos
        echo '<thead><tr><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th></tr></thead>'; // Encabezados de la tabla
        echo '<tbody>';
        foreach ($this->productos as $prod) { // Recorre cada producto en la lista de productos
            echo '<tr>'; // Crea una nueva fila en la tabla para cada producto
            echo '<td>' . htmlspecialchars($prod['nombre']) . '</td>';  // Muestra el nombre del producto, escapando caracteres especiales para evitar problemas de seguridad
            echo '<td>' . $prod['cantidad'] . '</td>'; // Muestra la cantidad del producto
            echo '<td>$' . number_format($prod['precio'], 2) . '</td>'; // Muestra el precio del producto formateado a 2 decimales
            echo '<td>$' . number_format($prod['subtotal'], 2) . '</td>'; // Muestra el subtotal del producto formateado a 2 decimales
            echo '</tr>';
        }
        echo '</tbody></table>';  // Cierra el cuerpo de la tabla y la tabla misma
        echo '</div>';

        // RESUMEN DE PEDIDO
        echo '<hr>'; // Línea separadora

        echo '<div class="summary-row"><span>Articulos: </span><span>' . $cantidad_total . '</span></div>'; // Muestra la cantidad total de artículos en el pedido
        echo '<div class="summary-row"><span>Sub Total(Sin ITBMS): </span><span>$' . number_format($subtotal, 2) . '</span></div>'; // Muestra el subtotal total del pedido formateado a 2 decimales

        echo '<hr>'; // Línea separadora
        echo '<div class="summary-row bold"><span>Total: </span><span>$' . number_format($total, 2) . '</span></div>'; // Muestra el total del pedido formateado a 2 decimales

        echo '</div>';

    }

}
?>