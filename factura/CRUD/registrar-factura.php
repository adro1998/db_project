<?php
    include($_SERVER['DOCUMENT_ROOT']."/db-project/factura/CRUD/factura-service.php");
    $nuevo = new Factura_Service();
    $nuevo->insertar_factura($_POST["id"],$_POST["fecha"], $_POST["codigo_empresa"], $_POST["cliente_cedula"]);
?>