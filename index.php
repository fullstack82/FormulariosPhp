<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Formulario PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Multipart permite enviar archivos desde el formulario al servidor -->
        <label for="nombre">Nombre:</label>
        <p> <input type="text" name="nombre" autofocus="autofocus" /></p>

        <label for="apellido:">Apellido:</label>
        <p> <input type="text" name="apellido" required /></p>

        <label for="boton:">Boton:</label>
        <p> <input type="button" name="boton" value="Haz click" /></p>

        <label for="sexo:">Sexo:</label>
        <p> <input type="checkbox" name="sexo" value="hombre" checked="check" />Hombre
            <input type="checkbox" name="sexo" value="mujer" />Mujer
        </p>

        <label for="color:">Color:</label>
        <p> <input type="color" name="color"  /></p>

        <label for="fecha:">Fecha:</label>
        <p> <input type="date" name="fecha" /></p>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>