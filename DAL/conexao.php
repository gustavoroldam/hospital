<?php
namespace DAL;

use POD;

class Conexao{
    private static $dbNome = 'hospital'; // Definir VAR(Atributos) / É opcional colocar os "tipos" das VAR
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $cont = null;

    public function __construct()
    {
        die("A função init não é permitida"); // COUT do PHP
    }

    public static function conectar(){ // O static faz com que não seja necessario criar uma VAR para ela ser usada
        if(null == self::$cont){
            try{
                self::$cont = new \PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); // PDO->É uma Classe que faz conexões com o BD
            }
            catch(\PDOException $exception){ // Pegar o erro da conexão
                die($exception->getMessage()); // Mostrar o erro
            }
        }
        return self::$cont;
    }

    public static function desconectar(){
        self::$cont = null;
    }
}

?>