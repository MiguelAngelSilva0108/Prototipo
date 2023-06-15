// tabla.js
function toggleInput(checkbox) {
    var row = checkbox.parentNode.parentNode;
    var input = row.querySelector('input[type="text"]');
    input.disabled = !checkbox.checked;
    calcularSubtotal();
  }
  
  function calcularSubtotal() {
    var subtotalCells = document.querySelectorAll('.table tbody tr td:nth-child(6)');
    var total = 0;
    for (var i = 0; i < subtotalCells.length; i++) {
      var row = subtotalCells[i].parentNode;
      var precioUnitarioText = row.cells[1].innerText;
      var precioUnitario = parseFloat(precioUnitarioText.substring(1));
      var cotizaInput = row.querySelector('input[type="text"]');
      var cotiza = parseFloat(cotizaInput.value);
      var subtotal = precioUnitario * cotiza;
      if (!isNaN(subtotal)) {
        row.cells[5].innerText = subtotal.toFixed(2);
        total += subtotal;
      }
    }
    document.getElementById('Cotizar').innerText = total.toFixed(2); // Corregir el id del elemento
  }
  