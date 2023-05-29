<?php
namespace DAL; // Informar onde está o arquivo

include_once 'C:\xampp\htdocs\hospital\DAL\conexao.php';

include_once 'C:\xampp\htdocs\hospital\MODEL\usuario.php';

class dalUsuario{
    public function SelectUser(string $usuario){
        $sql = "select * from usuario where usuario LIKE ?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $usuario = new \MODEL\Usuario();
        $usuario->setId($linha['id']);
        $usuario->setUsuario($linha['usuario']);
        $usuario->setSenha($linha['senha']);
        $usuario->setEmail($linha['email']);

        return $usuario;
    }
}

?>