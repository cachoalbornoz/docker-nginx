<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento 1</title>
</head>
<body>

    <h2>Documento 1 </h2>

    <?php 
        

        $servidor = 'db';
        $usuario  = 'scada_admin';
        $password = '7ek5?^sXnU~9';
        $database = 'scada1'; 

        $conexion = mysqli_connect($servidor, $usuario, $password) or die('Servidor no responde a la conexión, disculpe las molestias. Server '.$servidor);
        mysqli_select_db($conexion, $database)                     or die('Verificar conexion con la Base Datos '. $database);
        mysqli_query($conexion, "SET NAMES 'utf8'");

        if(isset($conexion)){
            echo '<p>Se puede conectar a '.$database.' </p> <br>';
        }
                

        echo phpinfo();
    ?>

</body>
</html>