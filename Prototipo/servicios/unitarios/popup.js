//popup.js
var btnAbrirPopup = document.getElementById('btn-abrir-popup');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function() {
  overlay.classList.add('active');
  popup.classList.add('active');
});

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
  const selectedHour = parseInt(this.value.split(':')[0]);

  if (currentHour >= 18 || selectedHour >= 18) {
    minDate.setDate(minDate.getDate() + 2);
  } else {
    minDate.setDate(minDate.getDate() + 1);
  }

  fechaInput.min = minDate.toISOString().split('T')[0];
});

