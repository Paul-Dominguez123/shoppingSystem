<?php 
    include_once "conexion.php";

    session_start();

    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // Verifica si los campos están vacíos
        if(empty($username) || empty($password)){
            echo "<script language='JavaScript'> alert('Por favor, complete todos los campos.');</script>";
        } else {
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
            $query->execute(['username' => $username, 'password' => $password]);

            $row = $query->fetch(PDO::FETCH_NUM);

            if($row == true){
                $rol = $row[3];
                $username=$_POST['username'];
                $_SESSION['rol'] = $rol;
                $_SESSION['username']=$username;
                $_SESSION['id_user']=$row[0];
                $_SESSION['estado']=1;

                switch($rol){
                    case 1:
                        header('location: admin/index.php');
                        break;
                    case 2:
                        header('location: cliente/index.php');
                        break;
                    default:
                }
            } else {
                echo "<script language='JavaScript'> alert('Usuario o contraseña incorrectos.');</script>";
            }
        }
    }
?>