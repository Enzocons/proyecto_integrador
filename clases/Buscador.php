<?php
    class Buscador{
        static public function buscarEmail($email,$baseDatos){
            $usuarios = $baseDatos;
        foreach ($usuarios as $usuario) {
          if ($email==$usuario["email"]) {
              return $usuario;
          }
        }
        return null;

        }
    }