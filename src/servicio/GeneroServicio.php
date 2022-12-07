<?php

require_once(__ROOT__ . "/db/Conexion.php");
require_once(__ROOT__ . "/modelo/GeneroModelo.php");
class GeneroServicio extends Conexion {

    public function __construct() {
        parent::__construct();
    }

    public function get_genero() {
        $sql = "SELECT *  FROM GENERO ";
        $result = $this->_db->query($sql);
        if ($result) {
            $data = [];
            while ($row = $result->fetch_object('GeneroModelo')) {
                $data[]=$row;
            }
            return $data;
        } else {
            die("Error en la ejecución del query: " . print_r($this->_db->error, true));
        }
    }

     public function createOrUpdateGenero($idgenero,$nombre,$descripcion) {
        $sql = " ";
        $result = $this->_db->query($sql);
        if ($result) {
            $data = [];
            while ($row = $result->fetch_object('GeneroModelo')) {
                $data[]=$row;
            }
            return $data;
        } else {
            die("Error en la ejecución del query: " . print_r($this->_db->error, true));
        }
    }
}

?>