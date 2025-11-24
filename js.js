function lanzarEmergencia() {
  // tu lógica de historial y alerta

  // para crear usuario o lanzar emergencia en la base, hacés fetch
  fetch('http://localhost:3000/crear-usuario', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      nombre: 'Juanis',
      email: 'juanis@ejemplo.com',
      contraseña: 'password123'
    })
  })
  .then(res => res.json())
  .then(data => console.log(data))
  .catch(err => console.error('Error:', err));
}
fetch('crear_usuario.php', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
    nombre: 'Juanis',
    email: 'juanis@ejemplo.com',
    contraseña: 'password123'
  })
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.error(err));
function irRegistro() {
  window.location.href = 'registro.html';
}

function irLogin() {
  window.location.href = 'login.html';
}
