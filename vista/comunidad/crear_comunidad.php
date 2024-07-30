<!-- vista/comunidad/crear_comunidad.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Añadir Comunidad</title>
</head>
<body>
    <h1>Añadir Comunidad</h1>
    <form action="index.php" method="post">
        <label for="nombre">Nombre de la Comunidad:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>
        <label for="poblacion">Población:</label>
        <input type="text" id="poblacion" name="poblacion" required><br>
        <label for="id_administrador">ID Administrador:</label>
        <input type="text" id="id_administrador" name="id_administrador" required><br>
        <button type="submit">Añadir</button>
    </form>
</body>
</html>
