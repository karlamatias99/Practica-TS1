<?php
require_once("Modelo/conexion.php");

class ModeloControlador
{
   
    //mostrar
    static function index(){
        //conexion
      //  $semilla = new Modelo();
        //extraer datos
      //  $datos = $semilla->Mostrar("SEMILLA","1");
        require_once("Vista/Inicio.php");

    }

    static function Semillas(){
      //conexion
    // $semilla = new Modelo();
      //extraer datos
   //  $datos = $semilla->Mostrar("semilla","1");
      include("Vista/MaizAmarillo.php");

  }




}

?>