<?php
    include($_SERVER['DOCUMENT_ROOT']."/db-project/cliente/CRUD/cliente-service.php");
    $nuevo = new Cliente_Service();
    $nuevo->borrar_Cliente($_POST["cedula"]);
?>