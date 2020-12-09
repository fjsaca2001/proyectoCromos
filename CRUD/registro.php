<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h2>Inscripciones</h2>
    <section>
        <h2>PROCESO DE REGISTRO</h2>

        <form method="post" action="guardardatos.php">
            <div class="grupo">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre" required>
            </div>
            <div class="grupo">
                <label for="nick">NickName</label>
                <input type="text" id="nick" name="nick" placeholder="Ingrese su nick" required>
            </div>
            <div class="grupo">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>
            <div class="grupo">
                <label for="pais">Pais</label>
                <input type="text" id="pais" name="pais" placeholder="Ingrese su pais">
            </div>
            <div class="grupo">
                <label for="edad">Edad</label>
                <input type="text" id="edad" name="edad" placeholder="Ingrese su edad">
            </div>
            <div class="grupo">
                <label for="contra">Contraseña</label>
                <input type="text" id="contra" name="contra" placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btnGuardar">Guardar</button>
        </form>
    </section>
</body>

</html>