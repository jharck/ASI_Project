<?php
include 'cConexion.php';
  //instanciación de la clase conexión a postgresql.
$usuario = $_REQUEST['Username'];
$password = $_REQUEST['Password'];
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
    public function login($usuario,$password){
    $conn = $conexion->url;
    $result = pg_query($conn, "SELECT * FROM user_acceso('$usuario','$password )");
    $this->mensaje=$result;
                    $arr = pg_fetch_array($result, 0, PGSQL_NUM);
                $arr[6];
                if($arr[6]){
                    echo "<script language=\"javascript\">
window.location.href=\"index.php\";
</script>";
                }else{
               $data['error']="$result";
               $this->load->view('login',$data); 
               return $data;
                }
}
}
?>
