<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="estilos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio B</title>
</head>
<body>
    <header>
        <p>Actividades: PHP</p><br>
        
    </header>

    <?php
        echo "<section>";
        include "ejercicioA.php";
        echo "</section><br>";
    ?>

    <?php
        echo "<section>";
        include "ejercicioB.php";
        echo "</section><br>";
    ?>

    <?php
        echo "<section>";
        include "ejercicioC.php";
        echo "</section><br>";
    ?>
    
</body>
</html>