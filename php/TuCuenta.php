<?php
        include_once('db_conn3.php');
        $sentencia = $bd -> query("select * from usuario");
        $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
        //print_r($persona);
        ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear cuenta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/book.ico" />
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <div class="login-container full-cover-background">
        <div class="form-container">
            <p class="text-center" style="margin-top: 17px;">
                <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            </p>
            <h3 class="text-center all-tittles" style="margin-bottom: 30px;">Crea tu cuenta</h3>
            <form action="data1.php" method="POST">
                <div class="group-material-login">
                    <input type="number" class="material-login-control" maxlength="7" name="Nocuenta">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; NoCuenta</label>
                </div>
                <div class="group-material-login">
                    <input type="text" class="material-login-control" maxlength="70" name="Carrera">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i></i> &nbsp; Carrera</label>
                </div>
                <div class="group-material-login">
                    <input type="number" class="material-login-control"maxlength="1" max="12" min="1" name="Semestre">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i></i> &nbsp; *Semestre</label>
                </div>
                <div class="group-material-login">
                    <input type="number" class="material-login-control" maxlength="10" name="Telefono">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i></i> &nbsp; *Telefono</label>
                </div>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" maxlength="12" name="Contrasenia">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div>
                <div class="group-material-login">
                    <input type="email" class="material-login-control"maxlength="70" name="Correo">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i></i> &nbsp; Correo</label>
                </div>

                <input type="submit" value="Registrarse" class="boton boton--primario" name="Enviar">
                   
              

                <?php
             if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta informacion'){

       
             ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
             }
             ?>
             
            </form>
            

        </div>
    </div>
</body>

</html>