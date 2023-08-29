<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUTRICERES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">


</head>

<body>

    <form method="post" autocomplete="off" action="conexion.php" id="formulario">
        <header class="logo">
            <h1>ENCUESTA ESTUDIANTES</h1>
            <img src="logo.png" name="Logo" alt="Logo">
        </header>
        <div class="input-group">


            <!-- CONTENEDOR DE NOMBRE -->
            <div class="input-container">
                <label><strong>Nombre: </strong></label>
                <input type="text" id="nombre" name="nombre" required><br><br>
            </div>

            <!-- CONTENEDOR DE EDAD -->
            <div class="input-container">
                <label><strong>Edad: </strong></label>
                <input type="number" id="edad" name="edad" required><br><br>
            </div>

            <!-- CONTENEDOR DE ALTURA -->
            <div class="input-container">
                <label><strong>Altura: </strong></label>
                <input type="number" step="any" id="altura" name="altura" required><br><br>
            </div>

            <!-- CONTENEDOR DE PESO -->
            <div class="input-container">
                <label><strong>peso: </strong></label>
                <input type="number" step="any" id="peso" name="peso" required><br><br>
            </div>

            <!-- CONTENEDOR DE GENERO -->
            <div class="input-container genero">
                <label><strong>Genero: </strong></label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select><br><br>
            </div>

           


            <!-- CONTENEDOR DE ALERGIAS ALIMENTARIAS -->
            <div class="input-container">
                <label><strong>Alergias Alimentarias </strong></label>
                <textarea id="alergias" name="alergias" rows="4" cols="50" required></textarea><br><br>
            </div>

            <!-- CONTENEDOR DE FRUTAS -->
            <div class="input-container" required>
                <label> <strong> ¿Cual es tu fruta favorita?</strong></label>


                <label for="fresa" class='fruitContainer'>
                    <span>Fresa</span>
                    <input type="radio" id="fresa" name="frutas" value="fresa">
                </label>

                <label for="banano" class='fruitContainer'>
                    <span>Banano</span>
                    <input type="radio" id="banano" name="frutas" value="banano">
                </label>

                <label for="manzana" class='fruitContainer'>
                    <span>Manzana</span>
                    <input type="radio" id="manzana" name="frutas" value="manzana">
                </label>

                <label for="uva" class='fruitContainer'>
                    <span>Uva</span>
                    <input type="radio" id="uva" name="frutas" value="uva">
                </label>

                <label for="mango" class='fruitContainer'>
                    <span>Mango</span>
                    <input type="radio" id="mango" name="frutas" value="mango">
                </label>

                <label for="naranja" class='fruitContainer'>
                    <span>Naranja</span>
                    <input type="radio" id="naranja" name="frutas" value="naranja">
                </label>

                <label for="mandarina" class='fruitContainer'>
                    <span>Mandarina</span>
                    <input type="radio" id="mandarina" name="frutas" value="mandarina">
                </label>
                <br>
            </div>

            <!-- CONTENEDOR DE CARBOHIDRATOS -->
            <div class="input-container" required>
                <label> <strong> ¿Cual es el carbohidrato que más consumes?</strong></label><br><br>

                <label for="arroz" class='fruitContainer'>
                    <span>Arroz</span>
                    <input type="radio" id="arroz" name="carbohidratos" value="arroz">
                </label>

                <label for="pan" class='fruitContainer'>
                    <span>Pan</span>
                    <input type="radio" id="pan" name="carbohidratos" value="pan">
                </label>

                <label for="Cereales" class='fruitContainer'>
                    <span>Cereales</span>
                    <input type="radio" id="Cereales" name="carbohidratos" value="Cereales">
                </label>

                <label for="pasta" class='fruitContainer'>
                    <span>Pasta</span>
                    <input type="radio" id="pasta" name="carbohidratos" value="pasta">
                </label>
                <br>
            </div>

            <!-- CONTENEDOR DE VERDURAS -->
            <div class="input-container genero" required>
                <label><strong>¿Cual es la verdura que más consumes?</strong></label><br>
                <select id="verduras" name="verduras">
                    <option value="tomate">Tomate</option>
                    <option value="cebolla">Cebolla</option>
                    <option value="zanahoria">Zanahoria</option>
                    <option value="papa">Papa</option>
                    <option value="lechuga">Lechuga</option>
                    <option value="brocoli">Brocolí</option>
                    <option value="pimenton">Pimentón</option>
                </select><br><br>
            </div>

            <!-- CONTENEDOR DE PROTEINAS -->
            <div class="input-container genero" required>
                <label><strong>¿Cual es la proteína que más consumes?</strong></label><br>
                <select id="proteinas" name="proteinas">
                    <option value="atun">Atún</option>
                    <option value="pechuga">Pechuga de Pollo</option>
                    <option value="huevo">Huevo</option>
                    <option value="carne">Carne</option>
                    <option value="brocoli">Brocolí</option>
                    <option value="aguacate">Aguacate</option>
                </select><br><br>
            </div>

            <!-- CONTENEDOR DE CANTIDAD -->
            <div class="input-container">
                <label><strong>¿Cuántas veces comes al día? </strong></label><br>
                <input type="number" id="cantidad" name="cantidad" required><br><br>
            </div>

            <!-- CONTENEDOR DE CALIFICACION -->
            <div class="input-container">
                <h4>¿Cómo calificarías tu alimentación?</h4>
                <label for="excelente" class='fruitContainer'>
                    <span>Excelente</span>
                    <input type="radio" id="excelente" name="calificacion" value="excelente" required>
                </label>

                <label for="buena" class='fruitContainer'>
                    <span>Buena</span>
                    <input type="radio" id="buena" name="calificacion" value="buena">
                </label>

                <label for="regular" class='fruitContainer'>
                    <span>Regular</span>
                    <input type="radio" id="regular" name="calificacion" value="regular">
                </label>

                <label for="mala" class='fruitContainer'>
                    <span>Mala</span>
                    <input type="radio" id="mala" name="calificacion" value="mala">
                </label><br></br>

            </div>

            <!-- CONTENEDOR DE COMENTARIOS -->
            <div class="input-container">
                <label> <strong>Comentarios adicionales: <strong></label>
                <textarea id="comentarios" name="comentarios" rows="4" cols="50" required></textarea><br>
            </div>

            <input type="submit" value="Enviar Encuesta">
            <input type="text" value="" name="alimentofav" hidden id="alimentosfav">
            <input type="text" value="" name="alimentonofav" hidden id="alimentosnofav">
        </div>
    </form>

    <script src='./js.js'></script>
</body>

</html>