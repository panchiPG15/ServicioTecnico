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
                    Marca<input type="text" name="txtMarca" value="" size="10">
                    <button type="submit" name="buscar" value="Buscar" size="4"> Buscar</button></td>
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
            <td>    <input type="radio" name="raBatery" value="si"/>
                    <input type="radio" name="raBatery" value="no"/>
            </td>
        </tr></div>
        <div><tr>
            <td>
                Cargador    </td>
                <td>    <input type="radio" name="raCargador" value="si"/>
                        <input type="radio" name="raCargador" value="no"/>
            </td>
        </tr></div>
       <div> <tr>
            <td>Daños en pantalla </td>
            <td>        <input type="radio" name="raPantalla" value="si"/>
                        <input type="radio" name="raPantalla" value="no"/>
            </td>
        </tr></div>
    </table></div>
<h4>
        <div>
        <button type="submit" name="btnCargar" value="Cargar datos" size="10">Cargar datos</button>
        <button type="submit" name="btnCanc" value="Cancelar" size="10"><a href="MainRecep.php">Cancelar</a></button>
        </div>
</div>
   <?php // error_reporting(0) ?>
    <div><?php
    include ("Funciones.php");
    $cnn = Conectar();
    if($_POST['btnCargar']=="Cargar datos"){

    $marca = $_POST['txtMarca'];
    $modelo = $_POST['txtModelo'];
    $color = $_POST['Color'];
    $tamaño = $_POST['txtTamaño'];
            //Input tipo tipo radio
    $bateria = $POST['raBatery'];
    $cargador = $_POST['raCargador'];
    $DañosPantalla = $_POST['raPantalla'];

    $sql = "insert into equipos (";
    }

    ?></div>
    
    </form>
    </center>
</body>
</html>