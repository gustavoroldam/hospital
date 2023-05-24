<?php
    namespace MODEL;

    class Medico{
        private ?int $id;
        private ?string $nome;
        private ?int $crm;
        private ?string $nacimento;
        private ?int $telefone;

        public function __construct(){}


        public function getId(){
            return $this->id;
        }
        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getCrm(){
            return $this->crm;
        }
        public function setCrm(int $crm){
            $this->crm = $crm;
        }

        public function getNacimento(){
            return $this->nacimento;
        }
        public function setNacimento(string $nacimento){
            $this->nacimento = $nacimento;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone(int $telefone){
            $this->telefone = $telefone;
        }
    }

?>