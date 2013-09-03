<?php
include 'clases/cConexion.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario = $_REQUEST['Username'];
$password = $_REQUEST['Password'];
                $conexion = new cConexion();
                $conexion->conectar();
                if($conexion->conectar()==true){
                       // echo "conexion exitosa";
                        }else{
                         //       echo "no se pudo conectar";
                        }
    $conn = $conexion->url;
    $result = pg_query($conn, "SELECT * FROM user_acceso('$usuario','$password')");
                $arr = pg_fetch_array($result, 0, PGSQL_NUM);
                $arr[5];
                if($arr[5]){
                    echo "<script language=\"javascript\">
window.location.href=\"admin.php\";
</script>";
                }else{
                echo "<script language=\"javascript\">
window.location.href=\"index.php\";
</script>";
               }
php?>