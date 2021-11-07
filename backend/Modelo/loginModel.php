<?php 
session_start();
class login{

    public function consultarDatos($user, $contr){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "SELECT correoUser, contrasenia, idRol FROM usuarios WHERE correoUser = :correoUser";
        //$sql = "SELECT * FROM usuarios";

        $statement = $conexion->prepare($sql);
        $statement->bindParam(':correoUser', $user);
        $statement->execute();

        $sesion = $statement->fetch(PDO::FETCH_OBJ);
        
        if($user == @$sesion->correoUser){
        
            if($contr == @$sesion->contrasenia){

               /* $_SESSION['username'] = $_POST['correoUs'];
                $_SESSION['rol'] = $sesion->idRol; */
                $_SESSION['username'] = $sesion->correoUser;
                $_SESSION['rol'] = $sesion->idRol;
                
              
                if($_SESSION['rol'] == 1){
                    header('location: ../../index.php');
                }else{
                    header('location: administracion/home.php');
                }

            }else{
                
                echo '<script>
                        alert("Nombre de usuario o contraseña incorrecta");
                        window.history.go(-1);
                     </script>';
            }
          
        }else{
            
            echo '<script>
                    alert("Nombre de usuario o contraseña incorrecta");
                    window.history.go(-1);
                 </script>';
        }

    }

}

?>