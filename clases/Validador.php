<?php
    class Validador{
        public function validarUsuario($usuario,$repass){
            $errores = array();
            $nombre = trim($usuario->getNombre());
            if (isset($nombre)) {
                if (empty($nombre)){
                    $errores["nombre"]="El campo nombre no debe esar vacio";
                    }
            }    
        
            $email = trim($usuario->getEmail());
            if(empty($email)){
                $errores["email"]="Completar email";
            }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errores["email"]="Email invalido";
            }
        
            $pass = trim($usuario-> getPassword());
            if (isset($repass)) {
                $repass=trim($repass);
            }
            if(empty($pass)){
                $errores["pass"]="Inserte una contraseña";
            }elseif (strlen($pass)<6) {
                $errores["pass"]="La contraseña debe tener al menos 6 caracteres";
            }
            if ($pass != $repass) {
                    $errores["repass"]="Las contraseñas no coinciden";
                }
            
        
            return $errores;
        }
    }