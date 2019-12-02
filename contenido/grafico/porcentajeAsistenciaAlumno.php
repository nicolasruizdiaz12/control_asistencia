<?php
session_start();
error_reporting(E_ERROR);

$usuario = $_SESSION['nombre'];
$id_usuario = $_SESSION['id_usuario'];

if (isset($_SESSION['usuario'])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Porcentaje</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/highcharts/js/highcharts.js"></script>
        <script src="js/highcharts/js/themes/grid.js"></script>
        <script src="js/highcharts/js/modules/exporting.js"></script>
    </head>

    <body>
        <div class="contendor">
            <div id="consulta">

                <div>
                    <h1 class="">Especialización Tecnica en Desarrollo de Software</h1>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Asistencia</th>
                            <th>Cantidad</th>
                            <th>Porcentaje</th>
                            <th>Clases Dictadas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("conexion.php");
                            date_default_timezone_set('america/argentina/buenos_aires');
                            $fechahoy = date("Y-m-d");
                            $query = "Select tipo_asistencia, Cant_Presentes, Cant_Clases, Cant_Ausentes
                            from
                            (select tipo_asistencia
                            , (select count(*) from registro where  id_tipo_asistencia = 2 And fecha_registro BETWEEN '2019-01-01' and '2019-12-31'
                                                                 And registro.id_usuario = $id_usuario and registro.id_tipo_asistencia = tp.id_tipo_asistencia) Cant_Presentes
                            , (select count(*) from registro where  id_tipo_asistencia = 1 And fecha_registro BETWEEN '2019-01-01' and '2019-12-31'
                                                                 And registro.id_usuario = $id_usuario  and registro.id_tipo_asistencia = tp.id_tipo_asistencia) Cant_Ausentes
                            ,(select count(distinct fecha_registro) from registro where fecha_registro BETWEEN '2019-01-01' and '2019-12-31') Cant_Clases                                  
                            from usuario, tipo_asistencia tp
                            Where  id_tipo_usuario = 1 AND id_usuario = $id_usuario) tblRegistro";
                            $result = mysqli_query($con, $query);
                            $c = 0;
                            $a = 0;
                            $total = 0;
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                $categoria[$c] = $row["tipo_asistencia"];
                                $datos[$c] = $row["Cant_Presentes"];
                                $total = $total + $row["Cant_Clases"];
                                $c++;
                            }
                            for ($j = 0; $j <= $c - 1; $j++) {
                                $a++;
                                echo "<tr><td>" . $categoria[$j];
                                echo "</td><td>" . $datos[$j];
                                echo "</td><td>" . number_format((($datos[$j] / $total) * 100), 1, ',', '') . "%";
                                $por[$j] = round(($datos[$j] / $total) * 100, 1);
                                if ($j == 0) {
                                    echo "</td><td rowspan=" . $c . ">" . $total . "</td></tr>";
                                }
                            }
                            mysqli_close($con);
                            ?>
                    </tbody>
                </table>
            </div>
            <script type="text/javascript">
                $(function() {
                    var colors = Highcharts.getOptions().colors,
                        categories = [<?php for ($y = 0; $y <= $c - 1; $y++) {
                                                echo "'" . $categoria[$y] . "',";
                                            } ?>],
                        name = 'Control',
                        data = [
                            <?php for ($x = 0; $x <= $c - 1; $x++) { ?> {
                                    y: <?php echo $por[$x] ?>,
                                    color: colors[<?php echo $x ?>],
                                },
                            <?php } ?>
                        ];

                    function setChart(name, categories, data, color) {
                        chart.xAxis[0].setCategories(categories, false);
                        chart.series[0].remove(false);
                        chart.addSeries({
                            name: name,
                            data: data,
                            color: color || 'white'
                        }, false);
                        chart.redraw();
                    }
                    var chart = $('#grafica').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Porcentajes Asistencias <?php echo $fechahoy; ?> '
                            },
                            xAxis: {
                                categories: categories
                            },
                            credits: {
                                enabled: false
                            },
                            plotOptions: {
                                column: {
                                    cursor: 'pointer',
                                    point: {
                                        events: {
                                            click: function() {
                                                var drilldown = this.drilldown;
                                                if (drilldown) {
                                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                                } else {
                                                    setChart(name, categories, data);
                                                }
                                            }
                                        }
                                    },
                                    dataLabels: {
                                        enabled: true,
                                        color: colors[0],
                                        style: {
                                            fontWeight: 'bold'
                                        },
                                        formatter: function() {
                                            return this.y + ' %';
                                        },
                                    }
                                }
                            },
                            series: [{
                                name: name,
                                data: data,
                                color: 'white'
                            }],
                            exporting: {
                                enabled: true
                            }
                        })
                        .highcharts();
                });
            </script>
            <div id="grafica"></div>
        </div>
    </body>

    </html>

<?php
} else {
    header("location:../../inicioAlumno.php");
}
?>