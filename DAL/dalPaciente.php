<?php

namespace DAL;

include_once 'C:\xampp\htdocs\hospital\DAL\conexao.php';
include_once 'C:\xampp\htdocs\hospital\MODEL\paciente.php';

class dalPaciente
{
    public function Select()
    {
        $sql = "select * from paciente;";
        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
            $paciente = new \MODEL\Paciente();

            $paciente->setId($linha['id']);
            $paciente->setNome($linha['nome']);
            $paciente->setTelefone($linha['telefone']);
            $paciente->setEndereco($linha['endereco']);
            $paciente->setSituacao($linha['situacao']);
            $paciente->setIdMedico($linha['idMedico']);
            $paciente->setIdMedicamento($linha['idMedicamento']);

            $lstPaciente[] = $paciente;
        }
        return $lstPaciente;
    }

    public function SelectId(int $id)
    {
        $sql = "select * from paciente where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $pdo = Conexao::desconectar();

        $paciente = new \MODEL\Paciente();

        $paciente->setId($linha['id']);
        $paciente->setNome($linha['nome']);
        $paciente->setTelefone($linha['telefone']);
        $paciente->setEndereco($linha['endereco']);
        $paciente->setSituacao($linha['situacao']);
        $paciente->setIdMedico($linha['idMedico']);
        $paciente->setIdMedicamento($linha['idMedicamento']);

        return $paciente;
    }

    public function SelectNome(string $nome)
    {
        $sql = "select * from paciente WHERE nome like '%" . $nome . "%' order by nome;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);

        $lstPaciente = null;
        foreach ($result as $linha) {
            $paciente = new \MODEL\Paciente();

            $paciente->setId($linha['id']);
            $paciente->setNome($linha['nome']);
            $paciente->setTelefone($linha['telefone']);
            $paciente->setEndereco($linha['endereco']);
            $paciente->setSituacao($linha['situacao']);
            $paciente->setIdMedico($linha['idMedico']);
            $paciente->setIdMedicamento($linha['idMedicamento']);

            $lstPaciente[] = $paciente;
        }
        $con = Conexao::desconectar();

        return $lstPaciente;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM paciente WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return $result;
    }

    public function Insert(\MODEL\Paciente $paciente)
    {
        $con = Conexao::conectar();

        $sql = "INSERT INTO paciente (nome, telefone, endereco, situacao, idMedico, idMedicamento) VALUES ('{$paciente->getNome()}', '{$paciente->getTelefone()}', '{$paciente->getSituacao()}', '{$paciente->getIdMedico()}', '{$paciente->getIdMedicamento()}');";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Paciente $paciente)
    {
        $sql = "UPDATE paciente SET nome=?, telefone=?, endereco=?, situacao=?, idMedico=?, idMedicamento=? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($paciente->getNome(), $paciente->getTelefone(), $paciente->getSituacao(), $paciente->getIdMedico(), $paciente->getIdMedicamento(), $paciente->getId()));
        $con = Conexao::desconectar();
        return $result;
    }
}
