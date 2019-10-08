<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar Alumnos</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<header>
        <div class="alert alert-info">
        <h2>Ingresar Alumnos a la Lista</h2>
        </div>
</header>
    
    <div id="formulario">
        <center>
            <form action="guardar.php" method="POST">
                <table class="table">
                   <!--  <thead>
                        <tr class="bg-primary">
                            <th>Ingresar alumnos a la lista</th>
                        </tr>
                    </thead> -->
                    <tbody>
                    <tr class="bg-primary">
                    <td>Apellido y Nombre</td>
                    <td>DNI</td>
                    <td>Email</td>
                    <td>Domicilio</td>
                    <td>Telefono</td>
                    <td>F_Nacimiento</td>
                </tr>
                    <td><input type="text" required name="nombre" id="nombre" placeholder="Apellido y Nombre..." value=""/> </td>
                    <td> <input type="varchar" required name="dni" id="dni" placeholder="D.N.I..."></td>
                    <td><input type="email" required name="email" id="email" placeholder="Email..." value=""/></td> 
                    <td><input type="text" required name="domicilio" id="domicilio" placeholder="Domicilio..." value=""/></td>
                    <td><input type="number" required name="telefono" id="telefono" placeholder="Telefono..." value=""/>  </td>   
                    <td><input type="date" required name="fecha" id="fecha" placeholder="Fecha Nacimiento..." value=""/> </td>    
                    </tbody>
                </table> 
                <br>
                <input type="submit" value="Guardar Alumno">       
            </form>
        </center>
    </div>

</body>
</html>