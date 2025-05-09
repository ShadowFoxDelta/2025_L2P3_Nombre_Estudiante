/**
 * Inicializa el plugin TouchSpin en los elementos con la clase 'spinner'.
 *
 * Opciones de configuración:
 * - `initval`: Valor inicial del spinner (por defecto: 0).
 * - `min`: Valor mínimo permitido (por defecto: 0).
 * - `max`: Valor máximo permitido (opcional, por defecto: 100).
 * - `step`: Incremento/decremento por cada clic (opcional, por defecto: 1).
 */

$('.spinner').TouchSpin({
  initval: 0, // valor inicial
  min: 0,  // valor mínimo permitido
  max: 100, // valor máximo permitido (opcional)
  step: 1 // incremento/decremento por cada clic (opcional)
});



/**
 * Actualiza el subtotal mostrado en el elemento span correspondiente basado en el valor del input.
 *
 * Esta función calcula el subtotal multiplicando la cantidad ingresada en el campo input
 * por el precio almacenado en el atributo `data-precio` del input. Luego actualiza el contenido
 * de texto del elemento span cuyo ID corresponde al ID del input, reemplazando 'prod' con 'total'.
 *
 * @param {HTMLInputElement} input - El elemento input que contiene la cantidad y el precio asociado.
 * @property {string} input.id - El ID del elemento input, usado para determinar el ID del span correspondiente.
 * @property {string} input.dataset.precio - El precio del producto, almacenado como cadena en el atributo `data-precio`.
 * 
 * Notas: el id del input y el id del span deben seguir un patrón específico para que la función funcione correctamente.
 * Por ejemplo, si el id del input es 'prod1', el id del span debe ser 'total1'.
 * de esta manera, la función puede encontrar el span correcto para actualizar su contenido.
 */

function actualizarSubtotal(input) {
  const cantidad = parseInt(input.value) || 0; // Asegurarse de que la cantidad sea un número entero
  const precio = parseFloat(input.dataset.precio); // Obtener el precio del atributo data-precio
  const subtotal = cantidad * precio;

  // Obtener ID del input y construir el ID del span correspondiente
  const id = input.id.replace('prod', 'total'); // Reemplaza 'prod' con 'total' en el ID del input
  document.getElementById(id).textContent = subtotal.toFixed(2); // Actualiza el contenido del span con el subtotal formateado a 2 decimales
}



/**
 * Escucha eventos en los elementos spinner para actualizar sus respectivos subtotales cuando su valor cambia.
 *
 * Llama a la función `actualizarSubtotal` cada vez que el valor de un spinner cambia o se ingresa.
 */

$('.spinner').on('change input', function () {
  actualizarSubtotal(this);
});



/**
 * Itera a través de todos los elementos spinner al cargar la página y calcula sus respectivos subtotales.
 *
 * Asegura que los subtotales mostrados sean precisos basados en los valores iniciales de los spinners.
 */
$('.spinner').each(function () {
  actualizarSubtotal(this);
});