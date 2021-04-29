<?php

class modeloOpcion(){

    public function __construct() {
        $this->db = $this->createConection();
    }

    Private function createConection(){
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_final';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName , $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function cargarOpcion($id_Encuesta, $texto){
        $db = $this->crearConexion();
        $sentencia = $db->prepare("INSERT INTO OPCION(id_encuesta, texto) VALUES(?, ?)"); 
        $sentencia->execute([$id_Encuesta, $texto]);   
    }

}