<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Datos</title>
</head>

<body>
    <center>
        <h1>
            Rellene los datos del trabajador
        </h1>
   <?php error_reporting(0)?>

    <form method="post">
        <div><table border="1">
            <div>
                <tr>
                    <td>Rut </td>
                    <td><input type="text" name="txtRutTrab" value="" size="10"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNomTrab" value="" size="10"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="txtApeTrab"value=""size="10"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="txtFonoTrab" value="" size="10"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Tipo de cargo</td>
                    <td><select name="Cargo">
                        <option value="1">Tecnico</option>
                        <option value="2">Recepcionista</option>
                        <option value="3">Administrador</option>
                        <option value="4">Bodeguero</option>
                        </select>
                    </td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="txtCorreoTrab" value="" placeholder="@correo.cl" size="10"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Sexo</td>
                    <td>
                        <select name="Sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="txtUser" value="<?php echo $rutTrab ?>" readonly></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td>
                        Clave
                    </td>
                    <td>
                        <input type="text" name="Passw" value="<?php echo $rutTrab,$apeTrab?>"size="10" readonly>
                    </td>
                </tr>
            </div>
                
        </table></div>
        <button type="submit" name="btnAgregar" value="Agregar" size="10">Agregar</button>
        <button type="submit" name="btnCancel" value="Cancelar" size="10"><a href="mainAdmin.php">Cancelar</a></button>
    </form>
    </center>
</body>
</html>