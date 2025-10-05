<?php

    class mysql extends Conexion{

        private $conexion;
        private $strquery;
        private $arrValues;

        public function __construct(){

            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
           
        }//end function construct

        //insertar un registro
        public function insert(string $query, array $arrValues){
            try {
                $this->strquery = $query; // $this->$strquery = $query;
                $this->arrValues = $arrValues; // $this->$arrValues = $arrValues;
                $insert = $this->conexion->prepare($this->strquery);
                $resInsert = $insert->execute($this->arrValues);
                $idInsert = $this->conexion->lastInsertId();
                $insert->closeCursor();
                return $idInsert;
            } catch (Exception $e) {
                $response = "error: ". $e->getMessage();
                return $response;
            }
        }//END INSERT


        //select all 
        public function select_all(string $query){
                try {
                    $this->strquery = $query;// $this->$strquery = $query;
                    $execute = $this->conexion->query($this->$strquery);
                    $request = $execute->fetchAll(PDO::FETCH_ASSOC);//obtencion a travez de un array y CLASS si quiero el objeto :)
                    return $request;
                }catch (Exception $e) {
                    $response = "error: ". $e->getMessage();
                    return $response;
                }
                
        }//end select all

        //select where
        public function select(string $query, array $arrValues){
            try {
                $this->strquery = $query; // $this->$strquery = $query;
                $this->arrValues = $arrValues; // $this->$arrValues = $arrValues;
                    $query = $this->conexion->prepare($this->$strquery);
                    $query->execute($this->$arrValues);
                    $request = $query->fetch(PDO::FETCH_ASSOC);//obtencion a travez de un array y CLASS si quiero el objeto :)
                    $query->closeCursor();
                    return $request;
            } catch (Exception $e) {
                    $response = "error: ". $e->getMessage();
                    return $response;
            }
        }//end select where



        //update
        public function update(string $query, array $arrValues){
            try {
                $this->strquery = $query; // $this->$strquery = $query;
                $this->arrValues = $arrValues; // $this->$arrValues = $arrValues;
                $update = $this->conexion->prepare($this->$strquery);
                $resupdate = $update->execute($this->$arrValues);
                $update->closeCursor();
                return $resupdate;
            }catch (Exception $e) {
                $response = "error: ". $e->getMessage();
                return $response;
             }
            }//end update


            //DELETE
        public function delete(string $query, array $arrValues){   
            try {
                    $this->strquery = $query; // $this->$strquery = $query;
                    $this->arrValues = $arrValues; // $this->$arrValues = $arrValues;                   
                    $delete = $this->conexion->prepare($this->$strquery);
                    $del = $delete->execute($this->$arrValues);
                    return $del;
                } catch (Exception $e) {
                     $response = "error: ". $e->getMessage();
                    return $response;
                }

        }//end delete



    }//end class