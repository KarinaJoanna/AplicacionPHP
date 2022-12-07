<?php

require_once(__ROOT__ . "/db/Conexion.php");
require_once(__ROOT__ . "/modelo/GeneroModeloUsuario.php");
class GeneroUsuario extends Conexion {

    public function __construct() {
        parent::__construct();
    }

    public function get_genero() {
        $sql = "SELECT *  FROM USUARIO ";
        $result = $this->_db->query($sql);
        if ($result) {
            $data = [];
            while ($row = $result->fetch_object('GeneroModeloUsuario')) {
                $data[]=$row;
            }
            return $data;
        } else {
            die("Error en la ejecución del query: " . print_r($this->_db->error, true));
        }
    }

     public function createOrUpdateUsuario($idusuario,$nombre,$apellido,$login,$pwd,$rol) {
        $sql = " ";
        $result = $this->_db->query($sql);
        if ($result) {
            $data = [];
            while ($row = $result->fetch_object('GeneroModeloUsuario')) {
                $data[]=$row;
            }
            return $data;
        } else {
            die("Error en la ejecución del query: " . print_r($this->_db->error, true));
        }
    }
}

?>