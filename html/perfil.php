<?php
    
    session_start();

    include 'conexion.php';
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para acceder a tu perfil");
                window.location = "iniciar.html;
            </script>
        ';
        session_destroy();
        exit();   
    }

?>
<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>