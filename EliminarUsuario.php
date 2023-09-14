<!DOCTYPE html>
<html>
    <head>
        <title>Continuar Eliminando</title>
    </head>

    <body>
        <center>
            <h1>Datos del Trabajador</h1>
            <form method="post">
            <?php  
            
            
            if(isset($_POST['btnEliminar'])){
            include("funciones.php");
            $cnn = Conectar();
            $rut = $_POST['RutEliminar'];
                    

                $sql="SELECT * from empleados where(Rut='$rut')";
                $rs = mysqli_query ($cnn, $sql);
                echo "<table align='center' border='10'>";
                echo "<b><h3><tr align='center'>";
                echo "<td>Rut</td>";
                echo "<td>Nombre</td>";
                echo "<td>Apellido</td>";
                echo "<td>Fono</td>";
                echo "<td>Cargo</td>";
                echo "<td>Correo</td>";
                echo "<td>Sexo</td>";
                echo "<td>Usuario</td>";
                echo "</h3></tr>";

                while($row = mysqli_fetch_array($rs))
                {
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "<td>$row[7]</td>";
                    echo "</tr>";
                    echo "</table>";
                }
            }
                ?>


            <input type="submit" name="btnEliminar2" value="Eliminar">

            <?php 
            
            if(isset($_POST['btnEliminar2'])){
                $sql1 = "DELETE FROM empleados WHERE(Rut ='$rut')";
                mysqli_query($cnn,$sql1);
                echo $sql1;
                echo "<script>alert('Se ha eliminado al usuario $rut')</script>";
            }  
            
            ?>
            
            </form>
        </center>    
    </body>
</html>