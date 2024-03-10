<?php

    include("conexion_f.php");



    if(isset($_POST['send'])) {
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['pais']) >= 1 &&
            strlen($_POST['consulta']) >= 1 &&
            strlen($_POST['telefono']) >= 1

        ) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $pais = trim($_POST['pais']);
            $consulta = trim($_POST['consulta']);
            $telefono = trim($_POST['telefono']);
            $fecha = date("d/m/y");
            $revision = "INSERT INTO form(nombre, email, pais, consulta, telefono, fecha)
                       VALUES ('$nombre', '$email', '$pais', '$consulta','$telefono', '$fecha')";

            $resultado = mysqli_query($conexion, $revision);

            if($resultado) {
                ?>
                    <h3 class="success">¡Tu registro se ha completado!</h3>
                <?php
            }
            else {
                ?>
                    <h3 class="error">¡Ocurrio un error!</h3>
                <?php
            }
        }
    else {
        ?>
            <h3 class="error">Por favor, complete todos los campos</h3>
        <?php
    }
}



