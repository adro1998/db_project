<!DOCTYPE html>
<html>
    <head>
        <title>Registro Factura</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="titulo">
            <div>
                <br>
                <h1 align="center" style="color: white">GESTIONAR FACTURA</h1>
                <h2 align="center" style="color: white">Registrar</h2>
            </div>
        
            <div class="scrollmenu">
                    <a href="/db-project/factura/gestionar-facturas.php">Inicio Gestion</a>
                    <a href="/db-project/factura/FORMS/eliminar-factura-form.php">Eliminar factura</a>
                    <a href="/db-project/admin/FORMS/buscar-admin-form.php">Buscar</a>
            </div>
            </div>
        </div>
        <div align = "center">
            <div>
                <br>
                <form method="POST" action="/db-project/factura/CRUD/registrar-factura.php">
                    <table>
                    <tr>
                        <th align="left">ID:<br></th>
                        <th><input type="number" name="id" required><br></th>
                    </tr>
                    <tr>
                         <th align="left">Fecha:<br></th>
                         <th><input type="date" name="fecha" required></th>
                    </tr>
                    <tr>
                        <th align="left">Cedula del cliente:<br></th>
                        <th colspan=2>
                        <select name="cliente_cedula">
                            <?php
                                require $_SERVER['DOCUMENT_ROOT'] ."\db-project\conexion.php" ;
                                $conne = Conectar::conn();
                                $sql = "SELECT cedula, nombre FROM `cliente`";
                
                                $datos = mysqli_query($conne, $sql);
                                echo '<option>  </option>';
                                if(($conne -> error)){
                                   echo "Se ha producido un error al consultar la informacion de los clientes <br>";
                                   echo $conne -> errno ."=". $conne -> error ."<br>";
                                }
                                else{
                                    while ($fila =mysqli_fetch_array($datos)) {
                                    echo '<option value="'.$fila['cedula'].'">'.$fila['cedula'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                        </th>
                    </tr>
                    <tr>
                        <th align="left">Codigo empresa:<br></th>
                        <th colspan=2>
                        <select name="codigo_empresa">
                            <?php
                                $sql = "SELECT codigo, nombre FROM `empresa`";
                
                                $datos = mysqli_query($conne, $sql);
                                echo '<option>   </option>';
                                if(($conne -> error)){
                                   echo "Se ha producido un error al consultar la informacion de las empresas <br>";
                                   echo $conne -> errno ."=". $conne -> error ."<br>";
                                }
                                else{
                                    while ($fila =mysqli_fetch_array($datos)) {
                                    echo '<option value="'.$fila['codigo'].'">'.$fila['codigo'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                        </th>
                    </tr>

                    <tr>
                        <th colspan=2><input align = "center" type="submit" value="Registrar"></th>
                    </tr>
                    
                    </table>
                </form>
            </div>
        </div>
        
    </body>
</html>


