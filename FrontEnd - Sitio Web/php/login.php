<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseñador</title>
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="../css/styles1.css" as="style">
    <link rel="stylesheet" href="../css/styles1.css">
</head>

<body>
    <header>
        <h1 class="titulo">Emilio<span>Freelancer</span></h1>
    </header>
<!--
    XDDDDDDDDDD Quien comenta WTF
-->
        <h2>login</h2>

        <form  class="formulario" method="post" action="validar.php">
            <fieldset>
                <legend>Ingresa los datos para iniciar sesion</legend>
                <div class="contenedor-campos-log">
                    <div class="campo-log" id="Usuario">
                        <label for="">Usuario</label>
                        <input class="input-text"type="text" name="user" id="user" placeholder="Usuario" required/>
                    </div>
                    <div class="campo-log" id="Contraseña">
                        <label for="">Contraseña</label>
                        <input class="input-text" type="password" name="pass" id="pass" placeholder="Contraseña" required/>
                    </div>
                </div>

                <div class="alinear-derecha flex" >
                    <input class="boton w-100" type="submit" id="butonContacto" value="Enviar">    
                </div>

            </fieldset>
            <p>Regresar a la pagina <a href="../index.php">Aqui!</a></p>
        </form>
    </section>
</main>

    <footer class="footer">
        <p>Todos los derechos reservados. Emilio Curiel</p>
    </footer>

    <script src="js/mensajes.js"></script>


</body>
</html>