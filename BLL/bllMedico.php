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

        public function SelectId(int $id){
            $dal = new \DAL\dalMedico();
            //Regras de Negocios

            return $dal->SelectId($id);
        }

        public function Delete(int $id){
            $dal = new \DAL\dalMedico();
            $dal->Delete($id);
        }

        public function Insert( \MODEL\Medico $medico){
            $dal = new \DAL\dalMedico();
            $dal->Insert($medico);
        }

        public function Update( \MODEL\Medico $medico){
            $dal = new \DAL\dalMedico();
            $dal->Update($medico);
        }
    }

?>