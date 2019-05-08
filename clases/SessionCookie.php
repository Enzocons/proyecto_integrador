<?php
    class SessionCookie{
        public function setUser($user){
            session_start();
            $_SESSION["nombre"]=$user["nombre"];
            $_SESSION["email"]=$user["email"];
            $_SESSION["avatar"]=$user["avatar"];
            $_SESSION["perfil"]=$user["perfil"];
        }
        public function setCookie($usuario,$dato){
            if (isset($dato)) {
                if($dato!=null){
                setcookie("email",$usuario["email"],time()+3600);
               // setCookie("perfil",$usuario["perfil"],time()+3600);
                }
                }    
        }
        public function validarUser(){
            if ($_SESSION["email"]) {
                return true;
            }elseif ($_COOKIE["email"]) {
                $_SESSION["email"]=$_COOKIE["email"];
                return true;
            }else {
                return false;
            }
        }
    }