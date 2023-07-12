<?php

include_once "../modelo/RegistroModelo.php";

class RegitroControl{
 
    public $nombre;
    public $correo;
    public function ctrInsertar(){
        $objRespuesta = RegistroModelo::mdlInsertar($this->nombre, $this->correo);
        echo json_encode($objRespuesta);
}
}
   

if(isset($_POST["nombre"]) && isset($_POST["correo"])){
    $objVentas = new RegitroControl();
    $objVentas->nombre = $_POST["nombre"];
    $objVentas->correo = $_POST["correo"];
    $objVentas->ctrInsertar();
}
?>