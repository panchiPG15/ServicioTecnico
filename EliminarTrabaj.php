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

        <form action="EliminarUsuario.php" method="post">
            <h3>Ingrese el rut de la persona que desea desvincular</h3>
                Rut<br>
                <input type="text" name="RutEliminar" value="" size="10">
                <br>
                <button type="submit" name="btnEliminar">Eliminar</button>
                <button type="submit" name="btnCancel"><a href="mainAdmin.php">Cancelar</a></button>
                <?php error_reporting(0) ?>
            <?php /**
               include("funciones.php");
                 $cnn = Conectar();
                $rut = $_POST['txtRut'];
                $sql
                $rs = mysqli_query ($cnn,$sql);

                if($row = mysqli_fetch_array($rs)){
                    $ = $row[1];
                    $ = $row[2];
                    $ = $row[3];
                    $ = $row[4];
                    $ = $row[5];
                    $ = $row[6];
                } */
                    ?>
        </form>
    </center>

    </body>
</html>