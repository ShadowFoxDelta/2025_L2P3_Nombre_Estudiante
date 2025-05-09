<?php
require_once 'ClasePedidoEscolar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $productos = $_POST['productos'] ?? [];

        $pedido = new Pedido($productos); // <- esto debe venir antes de usar $pedido

        if (empty($pedido->productos)) {
            throw new Exception("Eligue alguno de los productos para comenzar el pedido.");
        }

        $pedido->mostrarResumen();
    } catch (Exception $e) {
        echo '<div class="summary-row danger">' . htmlspecialchars($e->getMessage()) . '</div>';
    }
} 
