<?php
include 'clases/cConexion.php';
$user = $_REQUEST['Username'];
$clave = $_REQUEST['Password'];
echo $user;
echo  $clave;
  //instanciación de la clase conexión a postgresql.
                $conexion = new cConexion();
                $conexion->conectar();
                if($conexion->conectar()==true){
                        echo "conexion exitosa";
                        }else{
                                echo "no se pudo conectar";
                        }
                $conn = $conexion->url;
                $result = pg_query($conn, "SELECT * FROM user_acceso('$user','$clave')"); 
                $arr = pg_fetch_array($result, 0, PGSQL_NUM);
                $arr[6];
                if($arr[6]){
                    echo "<script language=\"javascript\">
window.location.href=\"index.html\";
</script>";
                }else{
                    echo '$result';
                }

             /* include 'clases/cSeguridad.php';
              $login = new cSeguridad();
              $user = $_REQUEST['Username'];
              $clave = $_REQUEST['Password'];
              $login->login($user,$clave);
              echo $login->mensaje; */
?>