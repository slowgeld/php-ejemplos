<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale1.0">
    <title>Formulario de registro de Paciente</title>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form id="formulario" action="21-pdo-post.php" method="post">
        <label for ="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="edad">Edad :</label>
        <input type="number" id="edad" name="edad" required><br>
        <label for="talla">Talla(cm):</label>
        <input type="number" id="talla" name="talla" required><br
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br>
        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name="fiebre" id="fiebre">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" name="dolor_muscular" id="dolor_muscular">
        <label for="dolor_muscular">Dolor Muscular</label><br>
        <input type="checkbox" name="gripe" id="gripe">
        <label for="gripe">Gripe</label><br>
        <input type="checkbox" name="presion_alta" id="presion_alta">
        <label for="presion_alta">Presion Alta</label><br>
        <input type="checkbox" name="fatiga" id="fatiga">
        <label for="fatiga">Fatiga</label><br>
        <input type="checkbox" name="garraspera" id="garraspera">
        <label for="garraspera">Garraspera</label><br>
        <label for="fecha">**Fecha de vacunacion:**</label>
        <input type="date" name="fecha" id="fecha">
        <div class="Botones">
            <br>
            <button type="submit">Guardar</button>
            <button>Cancelar</button>
        </div>
    </form>
</body>
</html>