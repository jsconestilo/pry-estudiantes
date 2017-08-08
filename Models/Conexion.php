<?php namespace Models;

  class Conexion{
    //Atributos
    private $datos = array(
      'host' => 'localhost:8080',
      'user' => 'root',
      'pass' => '',
      'db' => 'db_estudiantes'
    );
    private $con;
    //Metodos
    public function __construct(){
      $this->con = new \mysqli(
        $this->datos['host'],
        $this->datos['user'],
        $this->datos['pass'],
        $this->datos['db']
      );
    }

    public function consultaSimple($sql){
      $this->con->query($sql);
    }
    public function consultaRetorno($sql){
      $datos = $this->con->query($sql);
      return $datos;
    }
  }

?>
