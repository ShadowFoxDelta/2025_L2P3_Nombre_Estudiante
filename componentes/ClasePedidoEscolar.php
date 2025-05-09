<?php
class Pedido
{
    public $productos = [];

    public function __construct($productos = [])
    {
        foreach ($productos as $prod) {
            if (isset($prod['nombre'], $prod['precio'], $prod['cantidad']) && $prod['cantidad'] > 0) {
                $this->productos[] = [
                    'nombre' => $prod['nombre'],
                    'precio' => (float) $prod['precio'],
                    'cantidad' => (int) $prod['cantidad'],
                    'subtotal' => (float) $prod['precio'] * (int) $prod['cantidad']
                ];
            }
        }
    }

    public function total()
    {
        $suma = 0;
        foreach ($this->productos as $prod) {
            $suma += $prod['subtotal'];
        }
        return $suma;
    }

    public function cantidadTotal()
    {
        $cantidad_total = 0;
        foreach ($this->productos as $prod) {
            $cantidad_total += $prod['cantidad'];
        }
        return $cantidad_total;
    }

    public function mostrarResumen()
    {
        $cantidad_total = $this->cantidadTotal();
        $subtotal = $this->total();
        $total = $subtotal;

        // FACTURA RESUMEN
        echo '<div class="summary-box">';
        // DETALLE DE PRODUCTOS
        echo '<div class="product-detail-box mt-4">';
        echo '<h5>Detalle de productos</h5>';
        echo '<table class="table table-bordered">';
        echo '<thead><tr><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th></tr></thead>';
        echo '<tbody>';
        foreach ($this->productos as $prod) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($prod['nombre']) . '</td>';
            echo '<td>' . $prod['cantidad'] . '</td>';
            echo '<td>$' . number_format($prod['precio'], 2) . '</td>';
            echo '<td>$' . number_format($prod['subtotal'], 2) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        echo '</div>';

        // RESUMEN DE PEDIDO
        echo '<hr>';

        echo '<div class="summary-row"><span>Articulos: </span><span>' . $cantidad_total . '</span></div>';
        echo '<div class="summary-row"><span>Sub Total(Sin ITBMS): </span><span>$' . number_format($subtotal, 2) . '</span></div>';

        echo '<hr>';

        echo '<div class="summary-row bold"><span>Total: </span><span>$' . number_format($total, 2) . '</span></div>';

        echo '</div>';

    }

}
?>