<?php
    include($_SERVER['DOCUMENT_ROOT']."/db-project/empresa_distribuidora/CRUD/empresa-service.php");
    $nuevo = new Empresa_Service();
    $nuevo->insertar_Empresa($_POST["codigo"],$_POST["nombre"]);
?>