<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividades: PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='container'>
<div class='card'>

<h2>Actividades: PHP</h2>

<?php

//---------ARRAY ASOCIATIVOS----------//
$alumnos=array(
    '10'=>'Acosta Carlos Alberto',
    '29'=>'Aguilera Capra Jesús Dario',
    '34'=>'Ayala Leandro José',
    '45'=>'Benitez Dario',
    '52'=>'Britez Pablo Fernando',
    '65'=>'Canesin Luis Oscar',
    '79'=>'Degreforio Nicolás Ezequiel',
    '84'=>'Fernandez Victor Hugo',
    '9'=>'Bogado Ezequiel',
    '103'=>'Iza Federico',
    '117'=>'Gimenez Mariana Itatí',
    '124'=>'Britez Mendel Junior Joel');

$FechasAsistencias=array(
                '30/09'=>array('-','P','P','P','P','P','P','P','P','P','P','P'),
                '06/10'=>array('-','P','-','P','P','-','P','-','P','P','-','P'),
                '07/10'=>array('P','P','P','P','P','P','P','P','P','-','P','P'),
                '13/10'=>array('P','P','P','-','-','P','P','P','-','P','P','P'),
                '14/10'=>array('P','-','P','P','-','P','P','-','P','-','P','P'),
                '20/10'=>array('P','P','-','P','P','-','P','P','-','P','P','-'),
                '21/10'=>array('P','P','P','P','-','P','P','P','P','-','-','P'),
                '27/10'=>array('P','P','P','P','P','P','-','P','-','P','-','P')
            );

$Datos=array(
             'DNI'=>array('37534790', '31072642', '31495856', '28827535', '38573714', '20525869', '37535531', '16969416', '39136464', '40084200', '39133013', '5038619'),
             'Estado'=>array('Activo','Activo','Activo','Activo','Activo','Activo','Activo','Activo','Activo','Activo','Activo','Activo'),
             'TE'=>array('3704564895', '3705238745', '3704214589', '3718256489', '3704564895', '3705238745', '3704214589', '3718256489', '3704564895', '3705238745', '3704214589', '3718256489'));

$Notas=array(
    '10'=>array('Parcial 1'=>4,'Parcial 2'=>6, 'Recuperatorio'=>7),
    '29'=>array('Parcial 1'=>7, 'Parcial 2'=>6),
    '34'=>array('Parcial 1'=>5, 'Parcial 2'=>8, 'Recuperatorio'=>5),
    '45'=>array('Parcial 1'=>7, 'Parcial 2'=>10),
    '52'=>array('Parcial 1'=>9, 'Parcial 2'=>9),
    '65'=>array('Parcial 1'=>4, 'Parcial 2'=>6, 'Recuperatorio'=>10),
    '79'=>array('Parcial 1'=>9, 'Parcial 2'=>6),
    '84'=>array('Parcial 1'=>8, 'Parcial 2'=>9),
    '9'=>array('Parcial 1'=>8, 'Parcial 2'=>4, 'Recuperatorio'=>9),
    '103'=>array('Parcial 1'=>9, 'Parcial 2'=>6),
    '117'=>array('Parcial 1'=>9, 'Parcial 2'=>9),
    '124'=>array('Parcial 1'=>5, 'Parcial 2'=>5, 'Recuperatorio'=>4));

//-------------TABALAS--------//
?>
<table border="1" id="table">
<thead>
<tr>
    <th rowspan=2> Nro. </th>
    <th rowspan= 2> Apellido y Nombre </th>
    <th colspan=8> Fechas </th> 
    <th rowspan= 2>condicion</th>
</tr>

<tr>
    <td> 30/09 </td>
    <td> 06/10 </td> 
    <td> 07/10 </td>
    <td> 13/10 </td> 
    <td> 14/10 </td> 
    <td> 20/10 </td>
    <td> 21/10 </td> 
    <td> 27/10 </td>
</tr>
</thead>

<?php

$i=0;
foreach ($alumnos as $id => $nombre){
    echo '<tr>';
    echo '<td>'.$id.'</td>';
    echo '<td>'.$nombre.'</td>';
    
    foreach  ($FechasAsistencias as $fechas => $valor){
        echo '<td>'.$FechasAsistencias[$fechas][$i].'</td>';
    }
    $i++;
}
    echo '</tr>';
?>
</table>
<br> <br>

<table border="1" id="listado" >

<?php
$d=0;
echo'<tr>';
echo '<th style="background-color: rgb(218, 213, 213)"> ID </th>';
foreach  ($Datos as $documento => $dni){
    echo '<th style="background-color: rgb(218, 213, 213)">'.$documento.'</th>';

}
 echo'</tr>';
 foreach ($alumnos as $id => $nombre){
     echo'<tr>';
     echo'<td>'.$id.'</td>';

     foreach  ($Datos as $documento => $dni){
        echo '<td>'.$Datos[$documento][$d].'</td>';
    }

    $d++;
 }
 echo '</tr>';
?>
</table>

<?php
//Promedio Notas
foreach ($Notas as $parcial){
    $C = 0;
    foreach ($parcial as $key => $value){
        $sum += $parcial[$key];
        $C++;
    }
    $promedio = $sum / $C;
}

echo $promedio;

?>



</div>
</div>
</body>
</html>