<?php

namespace DAL;

include_once 'C:\xampp\htdocs\hospital\DAL\conexao.php';
include_once 'C:\xampp\htdocs\hospital\MODEL\medicamento.php';

class dalMedicamento
{
    public function Select()
    {
        $sql = "select * from medicamento;";
        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
            $medicamento = new \MODEL\Medicamento();

            $medicamento->setId($linha['id']);
            $medicamento->setNome($linha['nome']);

            $data = date_create($linha['validade']);
            $medicamento->setValidade(date_format($data, 'd-m-y'));
            $medicamento->setQtde($linha['qtde']);
            $medicamento->setUnidade($linha['unidade']);
            $medicamento->setPreco($linha['preco']);

            $lstMedicamento[] = $medicamento;
        }
        return $lstMedicamento;
    }

    public function SelectId(int $id)
    {
        $sql = "select * from medicamento where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $pdo = Conexao::desconectar();

        $medicamento = new \MODEL\Medicamento();

        $medicamento->setId($linha['id']);
        $medicamento->setNome($linha['nome']);
        $medicamento->setValidade($linha['validade']);
        $medicamento->setQtde($linha['qtde']);
        $medicamento->setUnidade($linha['unidade']);
        $medicamento->setPreco($linha['preco']);

        return $medicamento;
    }

    public function SelectNome(string $nome)
    {
        $sql = "select * from medicamento WHERE nome like '%" . $nome . "%' order by nome;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);

        $lstMedicamento = null;
        foreach ($result as $linha) {
            $medicamento = new \MODEL\Medicamento();

            $medicamento->setId($linha['id']);
            $medicamento->setNome($linha['nome']);
            $medicamento->setValidade($linha['validade']);
            $medicamento->setQtde($linha['qtde']);
            $medicamento->setUnidade($linha['unidade']);
            $medicamento->setPreco($linha['preco']);

            $lstMedicamento[] = $medicamento;
        }
        $con = Conexao::desconectar();

        return $lstMedicamento;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM medicamento WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return $result;
    }

    public function Insert(\MODEL\Medicamento $medicamento)
    {
        $con = Conexao::conectar();

        $sql = "INSERT INTO medicamento (nome, validade, qtde, unidade, preco) VALUES ('{$medicamento->getNome()}', '{$medicamento->getValidade()}', '{$medicamento->getQtde()}', '{$medicamento->getUnidade()}', '{$medicamento->getPreco()}');";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }


    public function Update(\MODEL\Medicamento $medicamento)
    {
        $sql = "UPDATE medicamento SET nome=?, validade=?, qtde=?, unidade=?, preco=? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($medicamento->getNome(), $medicamento->getValidade(), $medicamento->getQtde(), $medicamento->getUnidade(), $medicamento->getPreco(), $medicamento->getId()));
        $con = Conexao::desconectar();
        return $result;
    }
}
