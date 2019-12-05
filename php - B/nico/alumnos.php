<?php

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

$FechasAsistencias=array('Fechas'=>array('30/09'=>array('-','P','P','P','P','P','P','P','P','P','P','P'),
                                         '06/10'=>array('-','P','-','P','P','-','P','-','P','P','-','P'),
                                         '07/10'=>array('P','P','P','P','P','P','P','P','P','-','P','P'),
                                         '13/10'=>array('P','P','P','-','-','P','P','P','-','P','P','P'),
                                         '14/10'=>array('P','-','P','P','-','P','P','-','P','-','P','P'),
                                         '20/10'=>array('P','P','-','P','P','-','P','P','-','P','P','-'),
                                         '21/10'=>array('P','P','P','P','-','P','P','P','P','-','-','P'),
                                         '27/10'=>array('P','P','P','P','P','P','-','P','-','P','-','P')));
?>

<table width="100%" border="1">
<?php

echo "<thead>";
echo "<tr>";
echo "<td> <th> Nro. </th> </td>";
echo "<td><th> Apellido y Nombre </th></td>";
echo "<td><th> Fechas </th> <td> 30/09 </td> <td> 06/10 </td> <td> 07/10 </td> <td> 13/10 </td> <td> 14/10 </td> <td> 20/10 </td> <td> 21/10 </td> <td> 27/10 </td>";
echo "</tr>";
echo "</thead>";

foreach($alumnos as $key => $value)
{
?>
<tr>
<td> 
<?php echo $key; ?>
</td>
<?php foreach($value as $key=>$value);
{
?>
<td>
<?php echo $value; ?>
</td>
<?php } ?>
</tr>
<?php } ?>

</table>

<table>
<tr>
<th></th>
<td></td>
</tr>


</table>