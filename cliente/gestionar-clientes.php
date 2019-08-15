<!DOCTYPE html>
<html>
    <head>
        <title>Gestionar clientes DISC-APP</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="titulo">
            <div>
                <br>
                <h1 align="center" style="color: white">GESTIONAR CLIENTES</h1>
                <h2 align="center" style="color: white">Menu</h2>
            </div>

            <div class="scrollmenu">
                <a href="/db-project/index.html">Inicio</a>
                <a href="/db-project/cliente/FORMS/registrar-cliente-form.php">Registrar cliente</a>
                <a href="/db-project/cliente/FORMS/eliminar-cliente-form.php">Eliminar cliente</a>
                <a href="/db-project/admin/FORMS/buscar-admin-form.php">Buscar</a>
            </div>
        </div>
        <div>
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/db-project/cliente/CRUD/cliente-service.php");
                $nuevo = new Cliente_Service();
                $nuevo -> mostrar_cliente();
            ?>
        </div>
    </body>
</html>
