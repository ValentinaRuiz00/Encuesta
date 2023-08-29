<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {

        exit();
    }

    $servername = "localhost";
    $username = "root"; // Reemplaza esto con tu nombre de usuario de la base de datos
    $password = ""; // Reemplaza esto con tu contraseña de la base de datos
    $dbname = "ENCUESTA1";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $genero = $_POST["genero"];
    $frutas = $_POST["frutas"];
    $carbohidratos = $_POST["carbohidratos"];
    $verduras = $_POST["verduras"];
    $proteinas = $_POST["proteinas"];
    $alergias = $_POST["alergias"];
    $cantidad = $_POST["cantidad"];
    $calificacion = $_POST["calificacion"];
    $comentarios = $_POST["comentarios"];

    $sql = "INSERT INTO DATOS (NOMBRE, EDAD, ALTURA, PESO, GENERO, FRUTAS, CARBOHIDRATOS, VERDURAS, PROTEINAS,  ALERGIAS, CANTIDAD, CALIFICACION, COMENTARIOS)
    VALUES ('$nombre', '$edad', '$altura', '$peso', '$genero', '$frutas', '$carbohidratos','$verduras','$proteinas','$alergias','$cantidad','$calificacion', '$comentarios')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Los datos se insertaron correctamente')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    // Cerrar la conexión
    $conn->close();
    ?>

    <body>
       
            <form action="./index.php" method="post">
                <header class="logo">
                    <h1>RESULTADO DE ENCUESTA</h1>
                    <img src="logo.png" name="Logo" alt="Logo">
                </header>
                <div class="input-group">
                    <h2>Gracias por completar la encuesta.</h2>
                    <label><strong>Nombre: </strong></label>
                    <p><?php echo $nombre; ?></p>

                    <label> <strong>Edad: </strong></label>
                    <p><?php echo $edad; ?></p>

                    <label> <strong>Altura: </strong></label>
                    <p><?php echo $altura; ?></p>

                    <label> <strong>Peso: </strong></label>
                    <p><?php echo $peso; ?></p>

                    <label> <strong>Genero: </strong></label>
                    <p><?php echo $genero; ?></p>

                    <label> <strong>Frutas: </strong></label>
                    <p><?php echo $frutas; ?></p>

                    <label> <strong>Carbohidratos: </strong></label>
                    <p><?php echo $carbohidratos; ?></p>

                    <label> <strong>Verduras: </strong></label>
                    <p><?php echo $verduras; ?></p>

                    <label> <strong>Proteinas: </strong></label>
                    <p><?php echo $proteinas; ?></p>

                    <label> <strong>Alergias alimentarias: </strong></label>
                    <p><?php echo $alergias; ?></p>

                    <label> <strong>Cantidad: </strong></label>
                    <p><?php echo $cantidad; ?></p>

                    <label> <strong>Calificacion: </strong></label>
                    <p><?php echo $calificacion; ?></p>

                    <label for="comentarios"> <strong>Comentarios adicionales:</strong></label>
                 
                   <textarea id="comentarios" name="comentarios" rows="4" cols="50"><?php echo $comentarios; ?></textarea><br>
                </div>
            </form>
</body>

</body>

</html>