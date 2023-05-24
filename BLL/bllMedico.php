<?php
    namespace BLL;
    use DAL\dalMedico;

    include_once '../../DAL/dalMedico.php';

    class bllMedico{
        public function Select(){
            $dal = new \DAL\dalMedico();
            //Regras de Negocios

            return $dal->Select();
        }
    }

?>