<?php

    namespace BLL;
    use DAL\dalUsuario;

    include_once 'C:/xampp/htdocs/hospital/DAL/dalUsuario.php';

    class bllUsuario{
        public function SelectUser(string $usuario){
            $dal = new \DAL\dalUsuario();

            return $dal->SelectUser($usuario);
        }
    }

?>