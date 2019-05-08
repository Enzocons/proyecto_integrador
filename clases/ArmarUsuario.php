<?php
    class ArmarUsuario{
        public function armarUser($user){
        $numero=rand(1,8);
        if ($numero==1) { $avatarrand="../avatars/avatar1.svg";}
        if ($numero==2) { $avatarrand="../avatars/avatar2.svg";}
        if ($numero==3) { $avatarrand="../avatars/avatar3.svg";}
        if ($numero==4) { $avatarrand="../avatars/avatar4.svg";}
        if ($numero==5) { $avatarrand="../avatars/avatar5.svg";}
        if ($numero==6) { $avatarrand="../avatars/avatar6.svg";}
        if ($numero==7) { $avatarrand="../avatars/avatar7.svg";}
        if ($numero==8) { $avatarrand="../avatars/avatar8.svg";}
        $usuario = [
            "nombre"=>$user->getNombre(),
            "email"=>$user->getEmail(),
            "password"=>password_hash($user->getPassword(),PASSWORD_DEFAULT),
            "avatar"=>$avatarrand,
            "perfil"=>"1"
        ];
        return $usuario;
        }
    }