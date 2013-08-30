<?php
/*include 'clases/cConexion.php';
  //instanciación de la clase conexión a postgresql.
                $conexion = new cConexion();
                $conexion->conectar();
                if($conexion->conectar()==true){
                        echo "conexion exitosa";
                        }else{
                                echo "no se pudo conectar";
                        }
                $conn = $conexion->url;
                $result = pg_query($conn, "SELECT * FROM user_acceso('galonso','123')"); 
                $arr = pg_fetch_array($result, 0, PGSQL_NUM);
                $arr[6];
                if($arr[6]){
                    echo "<script language=\"javascript\">
window.location.href=\"index.php\";
</script>";
                }else{
                    echo '$result';
                }*/

             /* include 'clases/cSeguridad.php';
              $login = new cSeguridad();
              $user = $_REQUEST['Username'];
              $clave = $_REQUEST['Password'];
              $login->login($user,$clave);
              echo $login->mensaje; */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="#">
            <img class="center" alt="logo" src="img/logo.png">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
        <div class="metro double-size green">
            <form action="log.php">
                <div class="input-append lock-input">
                    <input type="text" name="Username" class="" placeholder="Username">
                </div>

        </div>
        <div class="metro double-size yellow">

                <div class="input-append lock-input">
                    <input type="password" name="Password" class="" placeholder="Password">
                </div>

        </div>
        <div class="metro single-size terques login">
 
                <button type="submit" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>