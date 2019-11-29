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
						<th>Total Estudiantes</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include("conexion.php");
					date_default_timezone_set('america/argentina/buenos_aires');
					$fechahoy = date("Y-m-d");
					$query = "SELECT tp.tipo_asistencia, COUNT(r.id_tipo_asistencia) as total FROM registro r, tipo_asistencia tp WHERE r.id_tipo_asistencia = tp.id_tipo_asistencia and r.fecha_registro = '$fechahoy' GROUP BY r.id_tipo_asistencia";
					$result = mysqli_query($con, $query);
					$c = 0;
					$a = 0;
					$total = 0;
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						$categoria[$c] = $row["tipo_asistencia"];
						$datos[$c] = $row["total"];
						$total = $total + $row["total"];
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