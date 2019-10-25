<?php
                session_start();
                $nombre = $_SESSION['nombre'];
                $usuario = $_SESSION['nombre'];
                $id_usuario = $_SESSION['id_usuario'];
                
                if (isset($_SESSION['usuario'])) {
                    //fecha de registro
                    date_default_timezone_set('america/argentina/buenos_aires');
                    $fechahoy = date("Y-m-d");

                    //trae la direccion mac del dispositivo con el que ingresa al sistema
                    echo 'IP: ' . $_SERVER['REMOTE_ADDR'] .  '<br>';
                    $macs = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));

                    foreach ($macs as $mac) {
                        if (filter_var($mac, FILTER_VALIDATE_MAC) !== FALSE) {
                            $macRed = $mac;
                            break;
                        }
                    }

                    echo 'MAC: ' . $macRed . '<br>';

                    if(isset($_POST['asistencia']))
                    {


                        //consulta de la mac del dispositivo registrado por el alumno 
                        include "homeAlumno/mac/conexion.php";
                        $query = "SELECT mac_compu FROM mac_dispositivo where id_usuario='$id_usuario' and mac_compu='$macRed'";
                        $consulta = mysqli_query($conexion, $query);
                        if (mysqli_num_rows($consulta) > 0) {
                            $resultado = $conexion->query($query);
                            $macQry = $resultado->fetch_assoc();
                            print_r($macQry);
                        } else {
                            $query = "SELECT mac_celu FROM mac_dispositivo where id_usuario='$id_usuario' and mac_celu = '$macRed'";
                            $consulta = mysqli_query($conexion, $query);
                            if (mysqli_num_rows($consulta) > 0) {
                                $resultado = $conexion->query($query);
                                $macQry = $resultado->fetch_assoc();
                                print_r($macQry);
                            }
                        }
                    }

                } else {
                    header("location:../inicioAlumno.php");
                }
?>
