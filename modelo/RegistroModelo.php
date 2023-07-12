<?php

require_once "conexion.php";
class RegistroModelo{


    public static function mdlInsertar($nombre,$correo){

        $mensaje = "";
                try {
                    $objRespuesta = conexion::conectar()->prepare("INSERT INTO tp_empleados_2023(nombre,correo)values(:nombre,:correo)");
                    $objRespuesta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
                    $objRespuesta->bindParam(":correo", $correo, PDO::PARAM_STR); 

                    if ($objRespuesta->execute()) {
                        $mensaje = "ok";
                    } else {
                        $mensaje = "error";
                    }
                    $objRespuesta = null;
                } catch (Exception $e) {
                    $mensaje = $e;
                }
        
                return $mensaje;
            }

}
?>