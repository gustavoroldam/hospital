<?php

namespace DAL;

include_once 'C:\xampp\htdocs\hospital\DAL\conexao.php';
include_once 'C:\xampp\htdocs\hospital\MODEL\medico.php';

class dalMedico
{
    public function Select()
    {
        $sql = "select * from medico;";
        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
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

    public function SelectId(int $id)
    {
        $sql = "select * from medico where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $pdo = Conexao::desconectar();

        $medico = new \MODEL\Medico();

        $medico->setId($linha['id']);
        $medico->setNome($linha['nome']);
        $medico->setCrm($linha['crm']);

        $data = date_create($linha['nacimento']);
        $medico->setNacimento(date_format($data, 'd-m-y'));
        $medico->setTelefone($linha['telefone']);

        return $medico;
    }

    public function SelectNome(string $nome)
    {
        $sql = "select * from medico WHERE nome like '%" . $nome . "%' order by nome;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);

        $lstMedico = null;
        foreach ($result as $linha) {
            $medico = new \MODEL\Medico();

            $medico->setId($linha['id']);
            $medico->setNome($linha['nome']);
            $medico->setCrm($linha['crm']);

            $data = date_create($linha['nacimento']);
            $medico->setNacimento(date_format($data, 'd-m-y'));
            $medico->setTelefone($linha['telefone']);

            $lstMedico[] = $medico;
        }
        $con = Conexao::desconectar();

        return $lstMedico;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM medico WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return $result;
    }

    public function Insert(\MODEL\Medico $medico)
    {
        $con = Conexao::conectar();

        $sql = "INSERT INTO medico (nome, crm, nacimento, telefone) VALUES ('{$medico->getNome()}', '{$medico->getCrm()}', '{$medico->getNacimento()}', '{$medico->getTelefone()}');";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Medico $medico)
    {
        $sql = "UPDATE medico SET nome=?, crm=?, nacimento=?, telefone=? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($medico->getNome(), $medico->getCrm(), $medico->getNacimento(), $medico->getTelefone(), $medico->getId()));
        $con = Conexao::desconectar();
        return $result;
    }
}
