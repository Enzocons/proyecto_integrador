<?php
    class OlvidePassword{
        static public function cambioPass($email,$newpass,$baseDatos,$json){
            $usuarios=$baseDatos;
            $nombreArch=$json->getNombreArchivo();
            $usuariosnuevos=[];
            unlink($nombreArch);
            foreach ($usuarios as $usuario) {
              if($email===$usuario["email"]){
                $usuarionuevo=[
                      "nombre"=>$usuario["nombre"],
                      "email"=>$usuario["email"],
                      "password"=>password_hash($newpass,PASSWORD_DEFAULT),
                      "avatar"=>$usuario["avatar"],
                      "perfil"=>$usuario["perfil"]
                    ];
              }else{$usuarionuevo=$usuario;}
              $usuariosnuevos[]=$usuarionuevo;
              
            }
           foreach ($usuariosnuevos as $usuario) {
            $jsusuario = json_encode($usuario);
            file_put_contents($nombreArch, $jsusuario . PHP_EOL, FILE_APPEND );
           }
        }

    }