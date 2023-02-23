<?php
        include_once('db_conn3.php');
  
        $sentencia = $bd -> query("select * from usuario");
        $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
        $where="";
        //print_r($persona);

     

        ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estudiantes</title>
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
    <script src="../js/buscador.js"></script>
    <script>
        function confirmacion(){
            var respuesta = confirm("¿Desea borrar el alumno?");
            if(respuesta == true){
                return true;
            }else{
                return false;
            }
        }

    </script>

</head>

<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button"
                    style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                sistema bibliotecario
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box"
                        style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                    <li><a href="../home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp;
                            Plantel <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="../institution.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp;
                                    Datos institución</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp;
                            Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="../catalog.html"><i
                                        class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp;
                                    Catálogo</a></li>
                        </ul>
                    </li>
                    <li><a href="report.php"><i
                                class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y
                            estadísticas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                    <img src="../assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom"
                    title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom"
                    title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema bibliotecario <small>Administración estudiantes</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                <li role="presentation" class="active"><a href="student.html">Estudiantes</a></li>
            </ul>
        </div>
        <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user03.png" alt="user" class="img-responsive center-box"
                        style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución, podrás
                    buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos del
                    estudiante.<br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si
                    eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo
                    favoritos.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li class="active">Listado de estudiantes</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin: 0 0 50px 0;">

            <ul class="list-unstyled text-center list-catalog-container">
            </ul>
        </div>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">listado de estudiantes</h2>
            <div class="table-responsive">
                <!-- Boton busqueda-->
                <form action="datosusuario.php" method="POST" class="form-padding">
                    <div class="campo">
                        <form class="d-flex">
                            <input class="form-control me-2 light-table-filter" type="text"
                                placeholder="Busca Estudiante" data-table="table_id2">
                            <hr>
                        </form>

                    </div>
                </form>
                <!-- Boton busqueda-->

                <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Ok, cambiado'){

       
            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Exito!</strong> Campo editado.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
            }
            ?>
                     <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){

       
            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Exito!</strong> Campo borrado.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
            }
            ?>
                <table class="table table-striped table-dark">
                    <thead class="div-table-row div-table-row-list">

                        <tr>
                            <th scope="col" style="width: 14%;">_#_</th>
                            <th scope="col" style="width: 14%;">*NoCuenta*</th>
                            <th scope="col" style="width: 14%;">*Carrera*</th>
                            <th scope="col" style="width: 14%;">*Semestre*</th>
                            <th scope="col" style="width: 14%;">*Telefono*</th>
                            <th scope="col" style="width: 14%;">*Contraseña*</th>
                            <th scope="col" style="width: 14%;">*Correo*</th>
                            <th scope="col" colspan="2" style="width: 12%;">*Opciones*</th>
                        </tr>

                </table>

            </div>
            <table class="table table-striped table-dark table_id2 ">
                <?php 
                                foreach($persona as $dato){ 
                            ?>

                <tr>
                    <td style="width: 14%;" scope="row"><?php echo $dato->ID; ?></td>
                    <td style="width: 14%;"><?php echo $dato->NoCuenta; ?></td>
                    <td style="width: 14%;"><?php echo $dato->Carrera; ?></td>
                    <td style="width: 14%;"><?php echo $dato->Semestre; ?></td>
                    <td style="width: 14%;"><?php echo $dato->Telefono; ?></td>
                    <td style="width: 14%;"><?php echo $dato->Contrasenia; ?></td>
                    <td style="width: 14%;"><?php echo $dato->Correo; ?></td>
                    <td style="width: 14%;"> <a style="color:#24ef1a;"
                            href="edits.php?ID=<?php echo $dato->ID; ?>">Editar</td>
                    <td style="width: 14%;"> <a style="color:#ef2e1a;"
                            href="delete1.php?ID=<?php echo $dato->ID; ?>" onclick="return confirmacion()">Eliminar</td>

                </tr>

                <?php 
                                }
                            ?>

                </thead>
            </table>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">



                    </div>
                </div>
            </div>
            <div class="table-responsive">

            </div>
            <div class="table-responsive">

            </div>
            <div class="table-responsive">

            </div>

        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias
                        ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam
                        ipsa accusamus error. Animi mollitia corporis iusto.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución,
                            podrás buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos
                            del estudiante.
                            ¡Importante! Si eliminas el estudiante del sistema se borrarán todos los datos relacionados
                            con él, incluyendo favoritos.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Roberto Daniel Saavedra Caballero <i
                                    class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i
                                    class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2022-2023</div>
        </footer>
    </div>

</body>

</html>