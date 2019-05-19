<?php
    class Validador{
        public function validarUsuario($usuario,$repass){
            $errores = array();
            $nombre = trim($usuario->getNombre());
            if (isset($nombre)) {
                if (empty($nombre)){
                    $errores["nombre"]="El campo nombre no debe esar vacio";
                    }
                if(preg_match("/^[a-zA-Z0-9]{2,16}$/",$usuario->getNombre())==null){
                    $errores["nombre"]="El nombre no tiene que tener caracteres especiales";
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
        public function validarLogin($user){
            $errores=array();
            $email = trim($user->getEmail());
            if(empty($email)){
                $errores["email"]="Completar email";
            }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errores["email"]="Email invalido";
            }
            $pass = trim($user-> getPassword());
            if(empty($pass)){
                $errores["pass"]="Inserte una contraseña";
            }elseif (strlen($pass)<6) {
                $errores["pass"]="La contraseña debe tener al menos 6 caracteres";
            }
            return $errores;
        }
        public function validarOlvidarPass($user,$pass,$repass){
            $errores=array();
            $email= trim($user->getEmail());
            if(empty($email)){
                $errores["email"]="Completar email";
            }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errores["email"]="Email invalido";
            }
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