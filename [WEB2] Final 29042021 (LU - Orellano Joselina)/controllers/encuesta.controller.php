<?php
require_once 'models/encuesta.model.php';
require_once 'models/opcion.model.ph';
require_once 'models/respuesta.model.php';
require_once 'views/encuesta.view.php';

class controladorEncuesta(){
    
    private $modeloEncuesta;
    private $modeloOpcion;
    private $modeloRespuesta;
    private $vista;

    public function __construct(){
        $this->modeloEncuesta = new ModeloEncuesta();
        $this->modeloOpcion = new ModeloOpcion();
        $this->modeloRespuesta = new ModeloRespuesta();
        $this->vista = new VistaEncuesta();
    }

    public function crearEncuesta(){
        $this->vista-> crearEncuesta();
    }

    public function cargarEncuesta($encuesta){
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $multiple = $_POST['multiple'];

        $this->modeloEncuesta->cargarEncuesta($titulo, $descripcion, $multiple);
    }

    public function cargarOpcion($id_encuesta, $opcion){
        $texto = $_POST['texto'];

        $this->modeloOpcion->cargarOpcion($id_encuesta, $texto);
    }
}
