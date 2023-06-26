// popup.js
var btnAbrirPopup = document.getElementById('btn-abrir-popup');
btnAbrirPopup.addEventListener('click', validarFormulario);

function validarFormulario(event) {
  event.preventDefault(); // Evitar el envío del formulario por defecto

  var checkboxes = document.querySelectorAll('input[name="interesa[]"]');
  var serviciosSeleccionados = [];

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      var servicio = checkboxes[i].value;
      var subtotal = parseFloat(checkboxes[i].parentNode.parentNode.querySelector('td:nth-child(5) .subtotal').textContent);
      serviciosSeleccionados.push({ servicio: servicio, subtotal: subtotal });
    }
  }

  var mensajeError = document.getElementById('mensaje-error');
  if (mensajeError) {
    mensajeError.parentNode.removeChild(mensajeError); // Eliminar el mensaje de error si existe
  }

  if (serviciosSeleccionados.length === 0) {
    mensajeError = document.createElement('p');
    mensajeError.textContent = 'Tiene que seleccionar al menos un servicio para continuar';
    mensajeError.style.color = 'red';
    mensajeError.id = 'mensaje-error';
    btnAbrirPopup.parentNode.insertBefore(mensajeError, btnAbrirPopup);
  } else {
    overlay.classList.add('active');
    popup.classList.add('active');

    var serviciosSeleccionadosTabla = document.getElementById('servicios-seleccionados');

    // Limpiar tabla antes de agregar nuevos servicios seleccionados
    while (serviciosSeleccionadosTabla.firstChild) {
      serviciosSeleccionadosTabla.removeChild(serviciosSeleccionadosTabla.firstChild);
    }

    // Agregar servicios seleccionados a la tabla
    for (var i = 0; i < serviciosSeleccionados.length; i++) {
      var servicio = serviciosSeleccionados[i].servicio;
      var subtotal = serviciosSeleccionados[i].subtotal;

      var row = document.createElement('tr');

      var servicioCell = document.createElement('td');
      servicioCell.textContent = servicio;
      row.appendChild(servicioCell);

      var subtotalCell = document.createElement('td');
      subtotalCell.textContent = '$' + subtotal.toFixed(2);
      row.appendChild(subtotalCell);

      serviciosSeleccionadosTabla.appendChild(row);
    }

    // Actualizar el costo preliminar
    var subtotalTotal = serviciosSeleccionados.reduce(function(acc, servicio) {
      return acc + servicio.subtotal;
    }, 0);
    
    var costoPreliminar = document.getElementById('CotizarPopup');
    if (costoPreliminar) {
      costoPreliminar.innerText = '$' + subtotalTotal.toFixed(2);
    }
    
    
  }
}


function toggleInput(checkbox) {
  var cotizaInput = checkbox.parentNode.parentNode.querySelector('input[name="cotiza[]"]');
  cotizaInput.disabled = !checkbox.checked;
  var mensajeError = document.getElementById('mensaje-error');
  if (mensajeError) {
    mensajeError.parentNode.removeChild(mensajeError); // Eliminar el mensaje de error si existe
  }
}


var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnCerrarPopup.addEventListener('click', function(e) {
  e.preventDefault();
  overlay.classList.remove('active');
  popup.classList.remove('active');
});

// CALENDARIZACIÓN
const fechaInput = document.getElementById('fecha');
const horaInput = document.getElementById('hora');

const today = new Date();
const currentHour = today.getHours();

// Calcula la fecha mínima permitida
let minDate = new Date(today); // Crea una copia de la fecha actual

if (currentHour >= 18) {
  minDate.setDate(minDate.getDate() + 2); // Suma 2 días adicionales si la hora actual es después de las 18:00
  minDate.setHours(0, 0, 0, 0); // Establece la hora a las 00:00:00
} else {
  minDate.setDate(minDate.getDate() + 1); // Suma 1 día adicional si la hora actual es antes de las 18:00
}

fechaInput.min = minDate.toISOString().split('T')[0];

horaInput.addEventListener('change', function() {
  // Verifica si la fecha seleccionada es menor que la fecha mínima permitida
  if (new Date(fechaInput.value) < minDate) {
    fechaInput.value = minDate.toISOString().split('T')[0]; // Restaura la fecha mínima si es menor que la fecha mínima permitida
  }
});
