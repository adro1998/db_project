<?php
    require $_SERVER['DOCUMENT_ROOT'] ."\db-project\conexion.php" ;
    class Cliente_Service{
        public function insertar_cliente ($cedula, $nombre, $correo){
                $conne = Conectar::conn();
                $sql = "INSERT INTO cliente VALUES ('$cedula', '$nombre', '$correo')";
                if(!mysqli_query($conne, $sql)){
                    echo "Se ha producido un error al registrar el cliente <br>";
                    echo $conne -> errno ."=". $conne -> error ."<br>";
                    echo "<button onClick='history.back()'>Regresar</button>";
                }
                else{
                    echo    "<script type='text/javascript'>
                                alert('El cliente ha sido registrado correctamente');
                                window.history.go(-1);
                            </script>";
                }

        }

        public function mostrar_cliente(){
            $conne = Conectar::conn();
            $sql = "SELECT cedula, nombre, correo FROM `cliente`";

            $datos = mysqli_query($conne, $sql);

            if(($conne -> error)){
                echo "Se ha producido un error al consultar la informacion de los clientes <br>";
                echo $conne -> errno ."=". $conne -> error ."<br>";
            }
            else{
                echo "<table>";
                    echo "<tr>";
                        echo "<td><b>Cedula</b></td>";
                        echo "<td><b>Nombre</b></td>";
                        echo "<td><b>Correo</b></td>";
                    echo "</tr>";
                while ($fila =mysqli_fetch_array($datos)){
                    echo "<tr>";
                        echo "<td>".$fila ["cedula"]."</td>";
                        echo "<td>".$fila ["nombre"]."</td>";
                        echo "<td>".$fila ["correo"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        public function borrar_cliente ($cedula){
            $conne = Conectar::conn();
            $sql = "DELETE  
                      FROM cliente 
                     WHERE cliente.cedula = $cedula";
                if(!mysqli_query($conne, $sql)){
                    echo "Se ha producido un error al eliminar el cliente <br>";
                    echo $conne -> errno ."=". $conne -> error ."<br>";
                    echo "<button onClick='history.back()'>Regresar</button>";
                }
                else{
                    echo    "<script type='text/javascript'>
                                alert('El Cliente ha sido borrado correctamente');
                                window.history.go(-1);
                            </script>";
                }
        }
    }
?>