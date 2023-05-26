<?php
    namespace BLL;
    use DAL\dalMedicamento;

    include_once '../../DAL/dalMedicamento.php';

    class bllMedicamento{
        public function Select(){
            $dal = new \DAL\dalMedicamento();
            //Regras de Negocios

            return $dal->Select();
        }

        public function SelectId(int $id){
            $dal = new \DAL\dalMedicamento();
            //Regras de Negocios

            return $dal->SelectId($id);
        }

        public function Delete(int $id){
            $dal = new \DAL\dalMedicamento();
            $dal->Delete($id);
        }

        public function Insert( \MODEL\Medicamento $medicamento){
            $dal = new \DAL\dalMedicamento();
            $dal->Insert($medicamento);
        }

        public function Update( \MODEL\Medicamento $medicamento){
            $dal = new \DAL\dalMedicamento();
            $dal->Update($medicamento);
        }
    }

?>