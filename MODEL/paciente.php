<?php

    namespace MODEL;

    class Paciente{
        private ?int $id;
        private ?string $nome;
        private ?int $telefone;
        private ?string $endereco;
        private ?string $situacao;
        private ?int $idMedico;
        private ?int $idMedicamento;
        private ?string $NomeMedico;
        private ?string $NomeMedicamento;

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

        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone(int $telefone){
            $this->telefone = $telefone;
        }

        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco(string $endereco){
            $this->endereco = $endereco;
        }

        public function getSituacao(){
            return $this->situacao;
        }
        public function setSituacao(string $situacao){
            $this->situacao = $situacao;
        }

        public function getIdMedico(){
            return $this->idMedico;
        }
        public function setIdMedico(int $idMedico){
            $this->idMedico = $idMedico;
        }

        public function getIdMedicamento(){
            return $this->idMedicamento;
        }
        public function setIdMedicamento(int $idMedicamento){
            $this->idMedicamento = $idMedicamento;
        }

        public function getNomeMedico(){
            return $this->NomeMedico;
        }
        public function setNomeMedico(string $NomeMedico){
            $this->NomeMedico = $NomeMedico;
        }

        public function getNomeMedicamento(){
            return $this->NomeMedicamento;
        }
        public function setNomeMedicamento(string $NomeMedicamento){
            $this->NomeMedicamento = $NomeMedicamento;
        }
    }

?>