<?php 
    include_once "loginMaster.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>

<body>
    <form action="#" class="form-box animated fadeInUp" method="POST">
        <h1 class="form-title">Iniciar Sesion</h1>
        <input type="text" placeholder="ID" autofocus name="username">
        <input type="password" placeholder="Contraseña" name="password">
        <button type="submit">
            Iniciar Sesion
        </button>
        <a href="javascript:abrir()" class="btn btn-link">
            <h3>Registrarse</h3>
        </a>
    </form>

    <div class="ventana" id="vent">
        <div id="cerrar"><a href="javascript:cerrar()">cerrar<a></div>
        <form class="registro" action="registroLogin.php" method="POST" onsubmit="return validarFormulario1()">

            <label for="">Username</label>
            <input type="email" placeholder="ID" name="newusername">
            <label for="">password</label>
            <input type="password" placeholder="Contraseña" name="newpassword">
            <input type="hidden" name="visita" value="2">


            <button type="submit">
                Registrarse
            </button>
        </form>
    </div>
    <section id="contenedor">

        <script>
        function abrir() {
            document.getElementById("vent").style.display = "block";
        }

        function cerrar() {
            document.getElementById("vent").style.display = "none";
        }

        function validarFormulario1() {
            var username = document.getElementsByName("newusername")[0].value;
            var password = document.getElementsByName("newpassword")[0].value;

            if (username.trim() === "" || password.trim() === "") {
                alert("Por favor, completa todos los campos.");
                return false; // Evita que el formulario se envíe si hay campos vacíos
            }

            // Si todos los campos están llenos, el formulario se enviará
            return true;
        }
        </script>
</body>

</html>