<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Formulario de Registro</title>
    <!--llamado a bootstrap-->
    <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">
    <!--Colocando el icono de la pagina-->
    <link rel="icon" href="imagenes_de_apoyo/iconnn.ico" type="imagenes_de_apoyo/iconnn.ico" title="Icono de la pagina">
    <!--Agregando la imagen de la izquierda-->
    <style>
      .bg{
        background-image: url({{'imagenes_de_apoyo/meowVentana.gif'}});
        background-position: center center;
        background-repeat: no-repeat;
        background-size:100%;
      }
    </style>
</head>
<body class="bg-dark text-light">
   <!--hacemos las rows-->
    <div class="container mb-5" >
      <div class="row aling-items-center mt-5 ">
        <!--columna que contiene la imagen-->
        <div class="col col-md-6 bg mt-5"></div>
        <div class="col-md-6 mt-5">
            <!--comenzamos con el formulario-->
            <form class="row g-3 needs-validation" novalidate action="{{route('register')}}" method="post">
                <!--iniciando con el arroba larabel-->
                @csrf 
                <!--logo de la empresa-->
              <div class="text-end text-center ">
                <img src="logos/logo.png" width="60" alt="">
              </div>
              <h2 class="fw-bold text-center py-4">Welcome to MangaKase</h2>
              <!--Nombre de la persona-->
                <div class="col-md-6">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Mark" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div class="invalid-feedback">
                    Deve de ingresar su nombre
                    </div>
                </div>
                <!--Apellidos de la persona-->
                <div class="col-md-6">
                    <label for="Apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Otto" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div class="invalid-feedback">
                    Deve de ingresar su Apellido
                    </div>
                </div>
                <!--E-mail de la persona-->
                <div class="col-md-8">
                    <label for="Corrreo" class="form-label">E-mail</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="Corrreo">@</span>
                    <input type="text" class="form-control" id="Correo" name="Corrreo" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Por favor ingrese su correo
                    </div>

                    </div>
                </div>
                <!--pass de la persona-->
                <div class="row g-3 align-items-center col-md-12">
                    <div class="col-auto">
                        <label for="Contraseña" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="Contraseña" name="Contraseña" class="form-control " aria-describedby="passwordHelpInline" 
                         required>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Ingrese caracteres mayores a 8 - 20
                        </span>
                    </div>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div class="invalid-feedback">
                        Must be 8-20 characters long.
                    </div>
                </div>
                <!--ciudad de la persona-->
                <div class="col-md-6">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="Ciudad" name="Ciudad" aria-describedby="validationServer03Feedback" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    Por favor inserte su ciudad
                    </div>
                </div>
                <!--Genero de la persona-->
                <div class="col-md-6">
                    <label for="Genero" class="form-label">Genero</label>
                    <select class="form-select" id="Genero" name="Genero" aria-describedby="validationServer04Feedback" required>
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Helicoptero Apache Ruso</option>
                    </select>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                    Por favor seleccione su genero
                    </div>
                </div>
                <!--Numero de la persona-->
                <div class="col-md-6">
                    <label for="Numero" class="form-label">Numero</label>
                    <input type="text" class="form-control" id="Numero" name="Numero" aria-describedby="validationServer05Feedback" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                    Por favor ingrese su numero
                    </div>
                </div>
                <!--Numero de la empresa de la persona-->
                <div class="col-md-6">
                    <label for="Empresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control" id="Numero" name="Empresa" aria-describedby="validationServer05Feedback" required>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                    Por favor ingrese su Empresa
                    </div>
                </div>
                <!--Terminos y condiciones -->
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        <a href="#">Acepto los terminos y condiciones</a>
                    </label>
                    <div class="valid-feedback">
                    Todo Bien!
                    </div>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        Acepte para continuar 
                    </div>
                    </div>
                </div>
                <!--boton de enciar registro-->
                <div class="col-12">
                    <button class="btn btn-primary w-50" type="submit">Registrarse</button>
                </div>
                </form>
            <!--fin del formulario-->
        </div>
      </div>
    </div>
<hr>
    <!--pie de pagina-->
    <footer>
    <div class="container mt-5">
        <div class="row ">
        <div class="col-lg-4">
            <h3>Enlaces</h3>
            <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="col-lg-4">
            <h3>Contacto</h3>
            <p>Correo electrónico: for.all.today123@gmail.com</p>
            <p>Teléfono: +591 79123133</p>
        </div>
        <div class="col-lg-4">
            <h3>Derechos de autor</h3>
            <p>(c) 2023 MangaKase. Todos los derechos reservados.</p>
        </div>
        </div>
    </div>
    </footer>
    <!--Scrip para que me funcione las validaciones del formulario-->
    <script>
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
    </script>
<!--fin de footer-->
    <!--comection to js for bootstrap-->
  <script src="{{'js/bootstrap.bundle.min.js'}}"></script>
</body>
</html>