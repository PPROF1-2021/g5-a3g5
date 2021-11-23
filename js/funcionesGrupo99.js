//funcion que valida los datos ingresados en el formulario

function validarRegUsuario() {
  var nombre, apellido,email, pass, telef, direcc, fNacim;

  //traigo valores del formulario
  nombre = document.getElementById('username').value;
  apellido = document.getElementById('fullname').value;
  email = document.getElementById('email').value;
  pass = document.getElementById('passwordid').value;
  telef = document.getElementById('idtelefono').value;
  cuil = document.getElementById('cuil').value;
  fNacim = document.getElementById('FechaNacim').value;


  //verifico que todos los campos contengan datos, si no muestro un alert:
  if (nombre === '' || apellido === '' || email === '' || pass === '' || telef === '' || cuil === '' || fNacim === '') {
    alert('Todos los campos deben estar completos');
    return false;
  }

  //valido que el email sea valido:
  if (
    !/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(
      email
    )
  ) {
    alert('Debes ingresar un email válido.');
    return false;
  }

  //verifico que el telefono sea numerico primero y que contenga diez digitos en el else if
  if (isNaN(telef)) {
    alert('El campo télefono debe contener un número de contacto válido');
    return false;
  } else if (telef.length > 10 || telef.length < 10) {
    alert(
      'El número debe contener 10 dígitos (código de área sin cero y número sin quince)'
    );
    return false;
  }

  //verifico si es mayor de 18 años
  if (calcularEdad(fNacim) < 18) {
    alert(
      'Revise la fecha de nacimiento. El empleado debe ser mayor de 18 a\u00f1os'
    );
    return false;     
  } 
   alert('registro completado exitosamente');
  }

//permite calcular la edad para verificar si la persona es mayor de 18 años
function calcularEdad(fechaNac) {
  let hoy = new Date();
  let fechaNacimiento = new Date(fechaNac);
  let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
  let diferenciaMeses = hoy.getMonth() - fechaNacimiento.getMonth();
  if (
    diferenciaMeses < 0 || (diferenciaMeses === 0 && hoy.getDate() < fechaNacimiento.getDate())
  ) {
    edad--;
  }
  return edad;
}
