<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Información</title>
</head>
<body>
    <?php
    $nombre   = "Recdwig";
    $lugar = "LugarX";
    $edad = "21";
    $carnet=" UnCarnetX";
    
    echo "<table>";
    echo "<tr>";
    echo "  <th> Nombre  </th>";
    echo "  <th> Lugar de nacimiento </th>";
    echo "  <th> Edad  </th>";
    echo "  <th> Carnet </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> " . $nombre . "</td>";
    echo "<td> " . $lugar . "</td>";
    echo "<td> " . $edad . "</td>";
    echo "<td> " . $carnet . "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>