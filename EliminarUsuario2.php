<!DOCTYPE html>
<html>
<head>
    <?php 
    
    include("Funciones.php");
    $cnn = Conectar();?>
    <title>Continuar Eliminando</title>
</head>

<body>
    <center>
        <h1>Datos del Usuario</h1>
        <form method="post">
        <?php 

        $rut1 = $_POST['RutEliminar'];
        $sql="SELECT * from empleados where(Rut='$rut1')";
        $rs = mysqli_query ($cnn, $sql);
        if($row = mysqli_fetch_array($rs)){
            $Nombre = $row[1];
            $Apellido = $row[2];
            $Fono = $row[3];
            $Cargo = $row[4];
            $Correo = $row[5];
            $Sexo = $row[6];
            $Usuario = $row[7];
        }
        ?>

        <table border="0">
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="txtRut" value="<?php echo $rut1; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="txtNom" value="<?php echo $Nombre; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="txtApe" value="<?php echo $Apellido; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" name="Fono" value="<?php echo $Fono; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Cargo</td>
                <td><input type="text" name="Cargo" value="<?php echo $Cargo; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="text" name="Correo" value="<?php echo $Correo; ?>" size="7" readonly></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <select name="Sexo" readonly>
                        <option value="Masculino" <?php if($Sexo == 'Masculino') echo 'selected'; ?>>Masculino</option>
                        <option value="Femenino" <?php if($Sexo == 'Femenino') echo 'selected'; ?>>Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="User" value="<?php echo $Usuario ?>" size="7" readonly></td>
            </tr>
        </table>
        <button type="submit" name="btnEliminarDef" value="">Eliminar</button>

    <?php 
    if(isset($_POST['btnEliminarDef'])){
        $rut1 = $rut;
        if(isset($_POST['btnEliminar2'])){
            $sql1 = "DELETE FROM empleados WHERE(Rut ='$rut1')";
            mysqli_query($cnn,$sql1);
            echo $sql1;
            echo "<script>alert('Se ha eliminado al usuario $rut1')</script>";
        }  
    } 
    ?>
    </form>
    </center>    
</body>
</html>