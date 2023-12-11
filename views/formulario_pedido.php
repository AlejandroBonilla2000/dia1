<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Formulario de Pedido</h2>
    <form action="index.php?action=procesarPedido" method="post">
        <fieldset>
            <legend>Información del Pedido</legend>

            <label for="nombre_id">Nombre</label>
            <input type="text" name="nombre_id" required>

            <br>

            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" required>

            <br>

            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" required>

            <br>

            <label for="precio_unitario">Precio Unitario:</label>
            <input type="text" name="precio_unitario" required pattern="\d+(\.\d{2})?"
                title="Ingrese un número entero o decimal con dos decimales">

            <br>

            <label for="fecha_pedido">Fecha de Pedido:</label>
            <input type="date" name="fecha_pedido" required>

            <br>
        </fieldset>

        <input type="submit" value="Enviar Pedido">
    </form>
</body>

</html>