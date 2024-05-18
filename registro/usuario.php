<?php
    //CLASE
    class usuario{

        //ATRIBUTOS
        private $user;
        private $pass;

        //METODOS
        function __construct($_user, $_pass)
        {
            $this->user = $_user;
            $this->pass = $_pass;
        }

        function iniciar_sesion(){
            include_once ("./conexion.php");
            $sql = "SELECT * FROM usuario WHERE nom= '".$this->user."' AND password = '".$this->pass."' ";
            $res = $conn->query($sql);
            return $res->num_rows;
        }
    }
?>

<!-- <!DOCTYPE html>
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

<body>
    <div class="ring">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <div class="login">
          <h2>Registro de Clientes</h2>
          <div class="inputBx">
            <input type="text" placeholder="Usuario">
          </div>
          <div class="inputBx">
            <input type="password" placeholder="Contraseña">
          </div>
          <div class="inputBx">
            <input type="submit" value="Iniciar Sesion">
          </div>
          <div class="links">
            <a href="#">Olvide mi Contraseña</a>
            <a href="#">Registrarse</a>
          </div>
        </div>
      </div>
      <!--ring div ends here-->
<!-- </body>

</html> --> -->