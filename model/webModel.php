<?php

require_once 'model.php';

class webModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    /* public function getUsuario($email) {
        $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM usuario WHERE mail = ?");
        $sentencia->execute(array($email));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    } */

}
?>