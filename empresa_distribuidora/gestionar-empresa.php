<!DOCTYPE html>
<html>
    <head>
        <title>Gestionar empresas DISC-APP</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="titulo">
            <div>
                <br>
                <h1 align="center" style="color: white">GESTIONAR EMPRESAS</h1>
                <h2 align="center" style="color: white">Menu</h2>
            </div>

            <div class="scrollmenu">
                <a href="/db-project/index.html">Inicio</a>
                <a href="/db-project/empresa_distribuidora/FORMS/registrar-empresa-form.html">Registrar emrpesa</a>
                <a href="/db-project/empresa_distribuidora/FORMS/eliminar-empresa-form.php">Eliminar emrpesa</a>
                <a href="/db-project/empresa_distribuidora/FORMS/consultar-empresa-form.php">Consultar</a>
                <a href="/db-project/empresa_distribuidora/FORMS/buscar-empresa-form.php">Buscar</a>
            </div>
        </div>
        <div>
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/db-project/empresa_distribuidora/CRUD/empresa-service.php");
                $nuevo = new Empresa_Service();
                $nuevo -> mostrar_Empresa();
            ?>
        </div>
    </body>
</html>
