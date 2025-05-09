<!-- /**
 * Esta sección del código representa un cuadro de resumen para la factura del formulario de pedido.
 * 
 * - El cuadro de resumen incluye un título "Orden de Pedido".
 * - Incluye dinámicamente  el archivo `archivo_procesar.php` que devolvera los datos de la factura`.
 * - Se proporciona un botón para enviar el pedido.
 * 
 */ -->
<!-- Resumen -->
<div class="summary-box">
  <h5 class="summary-title">Orden de Pedido</h5>

  <?php include("./componentes/archivo_procesar.php"); ?>

  <button type="submit" class="btn btn-success checkout-btn">Realizar Pedido</button>
</div>
