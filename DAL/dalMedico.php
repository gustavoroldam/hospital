<?php
    namespace DAL;

    include_once 'C:\xampp\htdocs\hospital\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\hospital\MODEL\medico.php';

    class dalMedico{
        public function Select(){
            $sql = "select * from medico;";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($result as $linha){
                $medico = new \MODEL\Medico();
                
                $medico->setId($linha['id']);
                $medico->setNome($linha['nome']);
                $medico->setCrm($linha['crm']);

                $data = date_create($linha['nacimento']);
                $medico->setNacimento(date_format($data, 'd-m-y'));
                $medico->setTelefone($linha['telefone']);

                $lstMedico[] = $medico;
            }
            return $lstMedico;
        }
    }


?>