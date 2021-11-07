<?php 
require_once ('../Modelo/conexion.php');
require_once ('../Modelo/loginModel.php');


if(isset($_POST['enviar'])){

    if(isset($_POST['correoUs']) && !empty($_POST['correoUs']) && isset($_POST['pass']) && !empty($_POST['pass'])){

        /*$model = new Conexion();
        $conexion = $model->get_conexion();*/
        
        $user = $_POST['correoUs'];
        $contr = $_POST['pass'];

        $consultar = new login();

        $consultar->consultarDatos($user, $contr);
        
        //$sqldos = "SELECT correoUser, contrasenia, idRol FROM usuarios WHERE correoUser = :correoUser";

        
        /*$res = $conexion->prepare($sqldos);
        $res->bindParam(':correoUser', $user);
        $res->execute();
        
        $sesion = $statement->fetch(PDO::FETCH_OBJ);*/

        /*
        function is_valid_email($str){
                return (false !== strpos($str, "@") && false !== strpos($str, "."));
        }
        
        if($user == @$sesion->correoUser){
        
            if($contr == @$sesion->contrasenia){

                $_SESSION['username'] = $_POST['correoUs'];
                $_SESSION['rol'] = $sesion->idRol;
              
                if($_SESSION['rol'] == 1){
                    header("location: index.php");
                }else{
                    header('location: administracion/home.php');
                }

            }else{
                echo '<script>
                        alert("Nombre de usuario o contraseña incorrecta");
                     </script>';
            }
          
        }else{
            echo '<script>
                    alert("El nombre de usuario no existe");
                 </script>';
        } */
          

    }else{
        echo '<script>
                alert("Debe rellenar todos los campos");
             </script>';  
    }
}


?>