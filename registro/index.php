<?php
// include_once "./conexion.php";
session_start();
if(isset($_POST["user"]) && isset($_POST["pass"])){
    include_once ("./usuario.php");
    $users = new usuario($_POST["user"], $_POST["pass"]);
    
    if($users->iniciar_sesion() == 1){
        $_SESSION["status"] = true;
        header("Location: ./home.php");
    }else{
        echo "Usuario y/o Contraseña incorrectos <i class='bi bi-emoji-frown'></i><br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro de clientes </title>
</head>

<!-- inicio de sesion formulario registro de clientes  -->
<body>
<div class="ring">
    <i style="--clr:#00ff0a;"></i>
    <i style="--clr:#ff0057;"></i>
    <i style="--clr:#fffd44;"></i>
    <div class="login">
        <h2>Registro de<br>Clientes Premium</h2>

        <form action="procesar_login.php" method="POST">

            <div class="inputBx">
                <input type="text" name="usuario" id="usuario" placeholder="Ingresa el usuario" required>
            </div><br><br>

            <div class="inputBx">
                <input type="text" name="contraseña" id="contraseña" placeholder="Ingresa la contraseña" required>
            </div><br><br>

            <div class="inputBx">
                <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
        
        <div class="links">
            <a href="#">Olvidé mi Contraseña</a><br>
            
            <a href="registroForm.php">Registrarse</a> <!-- Enlace para redirigir a registroForm.php -->
        </div>
    </div>
</div>

    <!-- Ring div ends here -->
</body>

</html>
