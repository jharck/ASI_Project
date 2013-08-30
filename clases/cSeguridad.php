<?php
include 'clases/cConexion.php';
  //instanciación de la clase conexión a postgresql.
                $conexion = new cConexion();
                $conexion->conectar();
                if($conexion->conectar()==true){
                        echo "conexion exitosa";
                        }else{
                                echo "no se pudo conectar";
                        }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cSeguridad
 *
 * @author Samuel Alonso
 */
class cSeguridad {
    //put your code here
    //Instanciando la coneccion
    public $mensaje;
    public function login($usuario,$clave){
    $conn = $conexion->url;
    $result = pg_query($conn, "SELECT * FROM user_acceso('$usuario','$clave')");
    $this->mensaje=$result;
    }

}

?>
