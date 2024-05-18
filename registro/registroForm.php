<?php
session_start();


    if(isset($_POST["rgt"])){
        $sql="INSERT INTO registro (`Nombre`, `Apellido`, `Telefono`, `Correo`, `Tipo_De_Evento`, `Fecha_Evento`) VALUES ('".$_POST["nom"]."','".$_POST["ape"]."','".$_POST["tel"]."','".$_POST["crr"]."','".$_POST["tipo"]."','".$_POST["fecha"]."')";
        include "./conexion.php";
        $conn->query($sql);
        // echo "registro";
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importa SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div style="text-align: center;"><br><br><!-- Contenedor para centrar el formulario -->
        <h2>Formulario Para<br>Agendar Evento</h2><br>

        <form method="post" action=""> <!-- Se actualiza la acción del formulario -->
           

            <div class="inputBx">
                <input type="text" id="nombre" name="nom" placeholder="Nombre">
            </div><br>

            <div class="inputBx">
                <input type="text" id="apellido" name="ape" placeholder="Apellido">
            </div><br>

            <div class="inputBx">
                <input type="tel" id="telefono" name="tel" placeholder="Teléfono">
            </div><br>

            <div class="inputBx">
                <input type="email" id="correo" name="crr" placeholder="Correo">
            </div><br>

            <div class="inputBx">
                <input type="text" id="tipo_evento" name="tipo" placeholder="Tipo Evento">
            </div><br>

            <div class="inputBx">
                <input type="date" id="fecha_evento" name="fecha" placeholder="Fecha Evento">
            </div><br>

            <input type="submit" class="btn btn-primary" value="Agendar" name="rgt">
        </form>

        <br><br>
        <a href="http://localhost/diego_dj/Diego_Dj_Producciones/">Volver a la página principal</a> <!-- Botón para regresar a la página principal -->
    </div>

    <!-- Script para mostrar la alerta -->
    <script>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Tu Agendamiento Fue Exito Pronto Un Asesor Se Pondra En Contacto ¡GRACIAS!',
                showConfirmButton: false,
                timer: 5000
            });
        <?php } ?>
    </script>
</body>

</html>