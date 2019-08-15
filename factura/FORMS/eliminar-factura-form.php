<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar Clientes</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="titulo">
            <div>
                <br>
                <h1 align="center" style="color: white">GESTIONAR CLIENTES</h1>
                <h2 align="center" style="color: white">Eliminar</h2>
            </div>
        
            <div class="scrollmenu">
                    <a href="/db-project/cliente/gestionar-clientes.php">Inicio Gestion</a>
                    <a href="/db-project/trabajador/FORMS/registrar-cliente-form.php">Registrar trabajador</a>
                    <a href="/db-project/admin/FORMS/buscar-admin-form.php">Buscar</a>
            </div>
            </div>
        </div>
        <div align = "center">
            <div>
                <br>
                <form method="POST" action="/db-project/cliente/CRUD/eliminar-cliente-id.php">
                    <table>
                    <tr><select name="cedula" required>
                            <?php
                                require $_SERVER['DOCUMENT_ROOT'] ."\db-project\conexion.php" ;
                                $conne = Conectar::conn();
                                $sql = "SELECT cedula, nombre, correo FROM `cliente`";
                
                                $datos = mysqli_query($conne, $sql);
                
                                if(($conne -> error)){
                                   echo "Se ha producido un error al consultar la informacion de los clientes <br>";
                                   echo $conne -> errno ."=". $conne -> error ."<br>";
                                }
                                else{
                                    while ($fila =mysqli_fetch_array($datos)) {
                                    echo '<option value="'.$fila['cedula'].'">'.$fila['cedula'].' - '.$fila['nombre'].'</option>';
                                    }
                                }
                            ?>
                    </select></tr>
                    <tr><input type="submit" name="eliminar" value="Eliminar"></tr>
                    </table>
                </form>
            </div>
        </div>
        
    </body>
</html>