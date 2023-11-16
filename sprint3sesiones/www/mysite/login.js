document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('email').value;
    if(usuario.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }
    var contraseña = document.getElementById('contraseña').value;
    if (contraseña.length == 0) {
        alert('No has escrito nada en la contraseña');
        return;
    }
    this.submit();
  }