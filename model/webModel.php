<?php

require_once 'model.php';

class webModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMarcas(){
        $sentencia = $this->conectarBaseDeDatos->prepare("SELECT Descripcion FROM marca ORDER BY Descripcion");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVehiculos($filtro){
        /* $marcas = $this->conectarBaseDeDatos->prepare("SELECT idmarca FROM marca WHERE Descripcion LIKE '$filtro%'");
        $marcas->execute();
        $marca = $marcas->fetchAll(PDO::FETCH_ASSOC);
        $vehiculos = "";
        foreach ($marca as $marc) {
            $vehiculos .= "Codigo_marca = ".$marc['idmarca']." OR ";
        }
        $vehiculo =  substr($vehiculos,0,-3); */
        $sentencia = $this->conectarBaseDeDatos->prepare("SELECT Descripcion FROM vehiculo WHERE Codigo_marca IN (SELECT idmarca FROM marca WHERE Descripcion LIKE '$filtro%') ORDER BY Descripcion");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRegistrosTabla($la_tabla,$el_filtro,$el_orden, $tipo){
        try {
          if(!empty($el_filtro)){
              $el_filtro = "WHERE $el_filtro";
          }
          if(!empty($el_orden)){
              $el_orden = "ORDER BY $el_orden";
          }
          //echo "SELECT * from $la_tabla $el_filtro $el_orden";
          $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_filtro $el_orden");
          $sentencia->execute();
          if($tipo=="O"){
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
          }
          elseif($tipo=="N"){
            return $sentencia->fetchAll(PDO::FETCH_NUM);
          }
          elseif($tipo=="B"){
            return $sentencia;
          }
          else{
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
          }
        } catch (PDOException $e) {
          //crear base de datos
          echo "error base";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        } catch (Exception $e) {
          echo "error base";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        }
        finally{
          //$this->conectarBaseDeDatos->closeCursor();
          //$this->conectarBaseDeDatos = null;
        }
    }

}
?>