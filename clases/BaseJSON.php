<?php
    class BaseJSON extends BaseDeDatos{
        private $nombreArchivo;
        
        
        public function __construct($nombreArchivo){
            $this->nombreArchivo = $nombreArchivo;
            
        }
        
        public function getNombreArchivo(){
            return $this->nombreArchivo;
        }
        
        public function setNombreArchivo($nombreArchivo){
            $this->nombreArchivo = $nombreArchivo;
        }
        
        public function guardar($registro){
            $jsusuario = json_encode($registro);
            file_put_contents($this->nombreArchivo, $jsusuario . PHP_EOL , FILE_APPEND);
        }
        public function leer(){
            $baseDatosJson=file_get_contents($this->nombreArchivo);
            $baseDatosJson=explode(PHP_EOL,$baseDatosJson);
            array_pop($baseDatosJson);
            foreach ($baseDatosJson as $usuarios) {
                $arrayUsuarios[]=json_decode($usuarios,true);
            }
            return $arrayUsuarios;
            
        }
        
                
        public function borrar(){
            //
        }
        
        public function actualizar(){
            //
        }
    }
