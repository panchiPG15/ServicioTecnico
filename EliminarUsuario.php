<!DOCTYPE html>
<html>
<head>
    <title>Continuar Eliminando</title>
</head>

<body>
    <center>
        <form method="post">
        <?php /** 
        if(isset($_POST['btnEliminar'])){
            include("funciones.php");
            $cnn = Conectar();
            $rut = $_POST['RutEliminar'];
            $sql=;
            $rs = mysqli_query ($cnn, $sql);

            if($row = mysqli_fetch_array($rs)){
                $ = $row[0];
                $ = $row[1];
                $ = $row[2];
                $ = $row[3];
                $ = $row[4];
                $ = $row[5];
                $ = $row[6];
            }
        } */
        ?>

        <table border="0">
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="txtRut" value="<?php echo $rut; ?>" size="7"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="txtNom" value="<?php echo $Nom; ?>" size="7"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="txtApe" value="<?php echo $Ape; ?>" size="7"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td><input type="date" name="Fnac" value="<?php echo $fnac; ?>" size="7"></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <select name="Sexo">
                        <option value="Masculino" <?php if($Sex == 'Masculino') echo 'selected'; ?>>Masculino</option>
                        <option value="Femenino" <?php if($Sex == 'Femenino') echo 'selected'; ?>>Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Fono</td>
                <td><input type="text" name="txtFon" value="<?php // echo $variable ?>" size="7"></td>
            </tr>
        </table>
        <button type="submit" name="btnEliminarDef" value="">Eliminar</button>
    </form>

    <?php /** 
    if(isset($_POST['btnEliminarDef'])){
        include("funciones.php");
        $cnn = Conectar();

       // $sql=;
        
        if(mysqli_query($cnn, $sql)){
            echo "<script>alert(<button type='submit'')</script>";
        }
        else {
            echo "<script>alert('Hubo un error al actualizar los datos')</script>";
        }
    } */
    ?>
    </center>    
</body>
</html>