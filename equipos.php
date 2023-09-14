<!DOCTYPE html>
<html>
<head>
    <title>Registro de equipos</title>
</head>
<body>
    <center>
        <h1>Nuevo equipo</h1>
        <div>
    <form method="post">
        <div><table border="1" cellpadding="10px">
            <div><tr>
                <td>
                    Marca<select name="SelMarca">
                        <option value="Apol">Apol</option>
                        <option value="Hvp">Hvp</option>
                        <option value="Linu">Linu</option>
                        <option value="Lenuvo">Lenuvo</option>
                    </select>

                <td>Modelo<input type="text" name="txtModelo" value="" size="10"></td>
            </tr></div>
            <div><tr>
                <td>Tamaño<input type="text" name="txtTamaño" value="" size="10"></td>
                <td>
                    Color<select name="Color">
                    <option value="Negro" size="10">Negro</option>
                    <option value="Gris" size="10">Gris</option>
                    <option value="Blanco" size="10">Blanco</option>
                </td>
            </tr></div>
        </table></div>

        <div><h2>Indique "si" o "no" segun presente el equipo<h2>
<h4> 
    <table>
        <div><tr>
            <td>Bateria  </td>
            <td>    <input type="radio" name="raBatery" value="si"/>Si
                    <input type="radio" name="raBatery" value="no"/>No
            </td>
        </tr></div>
        <div><tr>
            <td>
                Cargador    </td>
                <td>    <input type="radio" name="raCargador" value="si"/>Si
                        <input type="radio" name="raCargador" value="no"/>No
            </td>
        </tr></div>
       <div> <tr>
                <td>Daños en pantalla </td>
                <td>        <input type="radio" name="raPantalla" value="si"/>Si
                            <input type="radio" name="raPantalla" value="no"/>No
                </td>
            </tr>
        </div>
    </table>
</div>
            <div>
                <tr>
                    <td>Dueño</td>
                    <td><input type="text" name="RutDueno" value=""></td>
                </tr>
            </div>
<h4>
        <div>
        <button type="submit" name="btnCargar" value="Cargar" size="10">Cargar datos</button>
        <button type="submit" name="btnCanc" value="Cancelar" size="10"><a href="MainRecep.php">Cancelar</a></button>
        </div>
</div>
   <?php  ?>
    <div><?php

    include("Funciones.php");
    $cnn = Conectar();

    if($_POST['btnCargar']=="Cargar"){

    $marca = $_POST['SelMarca'];
    $modelo = $_POST['txtModelo'];
    $color = $_POST['Color'];
    $tamaño = $_POST['txtTamaño'];
    

            //Input tipo radio
    $bateria = $_POST['raBatery'];
    $cargador = $_POST['raCargador'];
    $DaPantalla = $_POST['raPantalla'];

    $Dueno = $_POST['RutDueno'];

    $sql = "INSERT INTO equipos VALUES('','$marca','$Dueno','$modelo','$color','$tamaño','$bateria','$cargador','$DaPantalla','false')";
    echo $sql;

    mysqli_query($cnn,$sql);
    } 
        echo "<script>alert('Los datos se han ingresado correctamente')</script>";
    ?>
    
    </form>
    </center>
</body>
</html>