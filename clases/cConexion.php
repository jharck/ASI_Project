<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cConexion
 *Funcion que permite accesar a la base de datos postgres
 * contiene las variables con el usuario,clave,nombre de la base y servidor 
 * @author Samuel Alonso
 */
class cConexion {
    //put your code here
                    //declaración de variables
                public $host; // para conectarnos a localhost o el ip del servidor de postgres
                public $db; // seleccionar la base de datos que vamos a utilizar
                public $user; // seleccionar el usuario con el que nos vamos a conectar
                public $pass; // la clave del usuario
                public $conexion;  //donde se guardara la conexión
                public $url; //dirección de la conexión que se usara para destruirla mas adelante
 
                //creación del constructor
                function __construct(){
                        }
 
                //creación de la función para cargar los valores de la conexión.
                public function cargarValores(){
                        $this->host='localhost';
                        $this->db='goissw';
                        $this->user='postgres';
                        $this->pass='Zurda@123';
                        $this->conexion="host='$this->host' dbname='$this->db' user='$this->user' password='$this->pass' ";
                        }
 
                        //función que se utilizara al momento de hacer la instancia de la clase
                        function conectar(){
                                $this->cargarValores();
                                $this->url=pg_connect($this->conexion);
                                return true;
                        }
 
                        //función para destruir la conexión.
                        function destruir(){
                                pg_close($this->url);
                        }
                        
 
   }


?>
