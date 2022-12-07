<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of LoginCont
 *
 * @author Yeoshua
 */
require_once(__ROOT__ . "/servicio/GeneroUsuario.php");

class GeneroControlUsuario {

    public function getCatalogoUsuario() {
        $servicio = new GeneroUsuario();
        return $servicio->get_genero();
    }

    public function printUsuarios($catalogo) {
        echo '<table cellpadding="0" cellspacing="0" class="center">';
        echo '<tr><th>Opción</th><th>Nombre</th><th>Apellido</th><th>Login</th><th>Password</th><th>Rol</th></tr>',"\n";
        foreach ($catalogo as $value) {
            echo '<tr id="_'.$value->getId().'">';
            echo '<td>', '<input type="radio" id="genero" name="genero" value="'.$value->getId().'">', '</td>';
            echo '<td>', $value->getNombre(), '</td>';
            echo '<td>', $value->getApellido(), '</td>';
            echo '<td>', $value->getLogin(), '</td>';
            echo '<td>', $value->getPwd(), '</td>';
            echo '<td>', $value->getRol(), '</td>';
            echo '</tr>',"\n";
        }
        echo '</table><br />';
    }
    
    public function createOrUpdate() {
        if (isset($_POST['submit'])) {
            if (empty($_POST['nombre']) || empty($_POST['descripcion'])) {
                $this->setError("El nombre del catalogo o la descripcion no son validos");
            } else {

                $escapedPost = $_POST;
                $escapedPost = array_map('html_entity_decode', $escapedPost);
                $nombre = $escapedPost['nombre'];
                $apellido = $escapedPost['apellido'];
                $login = $escapedPost['login'];
                $pwd = $escapedPost['password'];
                $rol = $escapedPost['rol'];
                $idusuario = $escapedPost['idusuario'];
                
                
                $servicio = new GeneroServicio();
                $test = $servicio->createOrUpdateGenero($idusuario,$nombre,$apellido,$login,$pwd,$rol);

                if (isset($test)) {
                    
                } else {
                    $this->setError("El nombre del usuario o el password no son validos");
                }
            }
        }
    }


}
