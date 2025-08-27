<?php
    require_once "connection/Connection.php";

    class Cliente {
        public static function getAll(){
            $db = new Connection();
            $query = "SELECT * FROM clientes";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows) {
                while($row =$resultado->fetch_assoc()){
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'apellido' => $row['apellido'],
                        'fecha_nacimiento' => $row['fecha_nacimiento'],
                        'genero' => $row['genero']
                    ];
                }//end while
                return $datos;
            } //end if
            return $datos;
        }//end getAll

          public static function getWhere($id_cliente){
            $db = new Connection();
            $query = "SELECT * FROM clientes WHERE id=$id_cliente" ;
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows) {
                while($row =$resultado->fetch_assoc()){
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'apellido' => $row['apellido'],
                        'fecha_nacimiento' => $row['fecha_nacimiento'],
                        'genero' => $row['genero']
                    ];
                }//end while
                return $datos;
            } //end if
            return $datos;
        }//end getWhere

        public static function insert($nombre, $apellido, $fecha_nacimiento, $genero){
            $db = new Connection();
            $query = "INSERT INTO clientes (nombre, apellido, fecha_nacimiento, genero) 
            VALUES('".$nombre."', '".$apellido."', '".$fecha_nacimiento."', '".$genero."')";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end insert

        
        public static function update($nombre, $apellido, $fecha_nacimiento, $genero){
            $db = new Connection();
            $query = "UPDATE clientes SET 
            nombre='".$nombre."', apellido='".$apellido."', fecha_nacimento='".$fecha_nacimiento."', genero='".$genero."')";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end update


        public static function delete($id_cliente){
            $db = new connection();
            $query = "DELETE FROM clientes WHERE  id=$id_cliente";
            $db->query($query);
            if($db->affected_row){
                return TRUE;
            }//end if
        }//end delete

    }// end class ClienteS