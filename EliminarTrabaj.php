<!DOCTYPE html>
<html>
<head>
    <title>Desvincular
    </title>
</head>

<body>
    <center>
        <h1>
            Desvincular trabajador
        </h1>

        <form action="EliminarUsuario2.php" method="POST">
            <h3>Ingrese el rut de la persona que desea desvincular</h3>
                Rut<br>
                <input type="text" name="RutEliminar" value="" size="10">
                <br>
                <button type="submit" name="btnEliminar">Eliminar</button>
                <button type="submit" name="btnCancel"><a href="mainAdmin.php">Cancelar</a></button>
                <?php error_reporting(0) ?>
            <?php 
               include("Funciones.php");
                 $cnn = Conectar();
                 if($_POST['btnEliminar']){
                $rut = $_POST['txtRut'];
                $sql = "SELECT * FROM empleados WHERE(Rut='$rutEliminar')";
                $rs = mysqli_query ($cnn,$sql);

                if($row = mysqli_fetch_array($rs)){
                    $Nombre = $row[1];
                    $Apellido = $row[2];
                    $Fono = $row[3];
                    $Cargo = $row[4];
                    $Correo = $row[5];
                    $Sexo = $row[6];
                    $Usuario = $row[7];
                }
            }
                    ?>
        </form>
    </center>

    </body>
</html>