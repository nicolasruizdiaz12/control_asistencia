<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar


$nombre= $_POST['nombre'];
$cuil= $_POST['cuil'];
$fecha= $_POST['fecha'];
$domicilio= $_POST['domicilio'];
$email= $_POST['email'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE usuario SET nombre='$nombre', cuil='$cuil', fecha='$fecha', domicilio='$domicilio', email='$email' WHERE id_usuario='$id_usuario'";
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../../datoAlumno.php");
}
else{
    echo "Error de Registro";
}

if (isset($_POST['submit'])) {
                        if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {


                            // creamos las variables para subir a la db
                            $ruta = "datos_institucion/logo/";
                            $nombrefinal = trim($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
                            $nombrefinal = str_ireplace(" ", "", $nombrefinal); //Sustituye una expresión regular
                            $upload = $ruta . $nombrefinal;



                            if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 

                                /* echo "<b>Upload exitoso!. Datos:</b><br>";
                                echo "Nombre: <i><a href=\"" . $ruta . $nombrefinal . "\">" . $_FILES['fichero']['name'] . "</a></i><br>";
                                echo "Tipo MIME: <i>" . $_FILES['fichero']['type'] . "</i><br>";
                                echo "<br><hr><br>"; */

                                $id_institucion=$_REQUEST['id_institucion'];

                                $nombre  = $_POST["nombre"];
                                $direccion= $_POST['direccion'];
                                $cuid= $_POST['cuid'];
                                $telefono= $_POST['telefono'];


                                $query = "UPDATE institucion_dato (nombre_institucion,direccion_institucion,cuid_institucion,telefono_institucion,ruta,tipo) 
                                VALUES ('$nombre','$direccion','$cuid','$telefono','" . $nombrefinal . "','" . $_FILES['fichero']['type'] . "')";
                                $resultado = $conexion->query($query);
                                /* mysql_query($query) or die(mysql_error()); */
                                echo "Sus Datos '".$nombre."' se han modificado con éxitos <br>";  
                                
                            }
                        }
                    }

?>