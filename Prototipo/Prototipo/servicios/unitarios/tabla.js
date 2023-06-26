//tabla.js
window.addEventListener('DOMContentLoaded', function() {
  // Obtén todos los campos de texto "cotiza[]"
  var cotizaInputs = document.querySelectorAll('input[name="cotiza[]"]');

  // Agrega un evento de escucha a cada campo de texto
  cotizaInputs.forEach(function(input) {
    input.addEventListener('input', filterNonNumericInput);
  });
});

function filterNonNumericInput(event) {
  var inputValue = event.target.value;
  var filteredValue = inputValue.replace(/[^0-9]/g, '');
  event.target.value = filteredValue;
  calcularSubtotal();
}

function calcularSubtotal() {
  var subtotalCells = document.querySelectorAll('.table tbody tr td:nth-child(5) .subtotal');
  var total = 0;

  for (var i = 0; i < subtotalCells.length; i++) {
    var row = subtotalCells[i].parentNode.parentNode;
    var precioUnitarioText = row.cells[1].innerText;
    var precioUnitario = parseFloat(precioUnitarioText.substring(1));
    var cotizaInput = row.querySelector('input[type="text"]');
    var cotiza = parseFloat(cotizaInput.value);
    var subtotal = precioUnitario * cotiza;

    if (!isNaN(subtotal)) {
      subtotalCells[i].innerText = subtotal.toFixed(2);
      total += subtotal;
    }
  }

  document.getElementById('Cotizar').innerText = total.toFixed(2);
}

function validarNumero(input) {
  // Reemplazar las comas por puntos para asegurar el formato decimal correcto
  input.value = input.value.replace(",", ".");

  // Validar si el número está dentro del rango permitido
  if (input.validity.valid) {
    var numero = parseFloat(input.value);
    if (isNaN(numero) || numero < 1 || numero > 999) {
      input.setCustomValidity("Ingrese un número entre 1 y 999");
    } else {
      input.setCustomValidity("");
    }
  } else {
    input.setCustomValidity("Ingrese un número válido");
  }
}
