<?php
require_once("inicio.php");
require_once(__ROOT__ . "/control/SessionControl.php");
require_once(__ROOT__ . "/modelo/UsuarioModelo.php");
require_once(__ROOT__ . "/control/GeneroControlUsuario.php");
SessionControl::testSession();
SessionControl::checkSession();

$usuario = unserialize(SessionControl::get("USUARIO"));
$control = new GeneroControlUsuario();
$catalogo = $control->getCatalogoUsuario();
$control->createOrUpdate();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">        
        <title>Usuario</title>
        <link href="css/master.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/menu.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/login.css" media="all">
        <script src="js/cat_usuario.js" defer></script>
    </head>
    <body>
        <div id="wrap">
            <div class="container" >
                <div class="header">
                    <a href="#">
                        <img src="img/logo.jpg" alt="logo" name="logo" width="612" height="206" />
                    </a> 

                </div>

                <div id="profile">
                    <?php
                    echo "<strong>Bienvenido: </strong><em> " . $usuario->getNombre() . " </em><strong>/  Rol </strong>: <em> " . $usuario->getRol() . " </em>";
                    ?>
                    <strong id="logout"><a href="logout.php">Salir</a></strong>
                </div>
                <?php require_once("menubar.php"); ?>
                <seccion>
                    <p class="seccion-titulo">Usuarios</p> 

                    <?php $control->printCatalogo($catalogo); ?>

                    <div id="login" class="center">
                        <h2>Operaciones</h2>
                        <p>
                            <input type="button" id="nuevo"  value="Nuevo">
                            <input type="button" id="modificar" value="Modificar">
                        </p> 
                        <form action="" method="post">
                            <input type="hidden" value="" id="idusuario" name="idusuario">
                            <label>Nombre :</label>
                            <input id="nombre" name="nombre" placeholder="Nombre del usuario" type="text" disabled>
                            <label>Apellido :</label>

                            <input id="apellido" name="apellido" placeholder="Apellido" type="text" disabled>
                            <input name="submit" type="submit" value=" Guardar ">
                        </form>
                    </div>


                </seccion>
            </div>
            <div class="footer">
                
            </div>
        </div>
    </body>
</html>