<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="number" name="cantidad" id="cantidad" value="cantidad">
        <input type="submit" value="Guardar">
    </form>
    <div class="js">
        <script>
            document.getElementById("cantidad").value = valor;
        </script>
    </div>
    <div class="php">
        <form action="" method="post">
            <table border="1">
                <tr>
                    <th rowspan="2">Materia</th>
                    <th colspan="2">Horario</th>
                </tr>
                <tr>
                <th>Entrada</th>
                <th>Salida</th>
                </tr>
                <?php
                $valor = $_POST["cantidad"];
                echo "<br>";
                for ($i = 0; $i < $valor; $i++) {
                    echo '
                <tr>
                <td><input type="text" placeholder="Nombre '.$i.'"></td>
                <td><input type="time" placeholder="Hora"></td>
                <td><input type="time" placeholder="Hora"></td>
                </tr>';
                }
                ?>
            </table>
        </form>
    </div>

</body>

</html>