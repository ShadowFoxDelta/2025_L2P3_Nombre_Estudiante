$('.spinner').TouchSpin({
  initval: 0, // valor inicial
  min: 0,  // valor mínimo permitido
  max: 100, // valor máximo permitido (opcional)
  step: 1 // incremento/decremento por cada clic (opcional)
});

// Función para actualizar el total de un producto
function actualizarSubtotal(input) {
  const cantidad = parseInt(input.value) || 0;
  const precio = parseFloat(input.dataset.precio);
  const subtotal = cantidad * precio;

  // Obtener ID del input y construir el ID del span correspondiente
  const id = input.id.replace('prod', 'total');
  document.getElementById(id).textContent = subtotal.toFixed(2);
}

// Al cambiar cualquier spinner, actualiza su propio subtotal
$('.spinner').on('change input', function () {
  actualizarSubtotal(this);
});

// Calcular todos los subtotales al cargar
$('.spinner').each(function () {
  actualizarSubtotal(this);
});