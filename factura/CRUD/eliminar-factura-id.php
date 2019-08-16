<?php
    include($_SERVER['DOCUMENT_ROOT']."/db-project/factura/CRUD/factura-service.php");
    $nuevo = new Factura_Service();
    $nuevo->borrar_factura($_POST["id"]);
?>