<?php
namespace DAL; // Informar onde está o arquivo

include_once 'C:\xampp\htdocs\servicos\DAL\conexao.php'; // require 'conexao.php' -> o "require" se n conseguir acessar ele para o programa
// o "_once" serve para caso n exista a inclusão ele cria se n ele segue em frente

include_once 'C:\xampp\htdocs\servicos\MODEL\Usuario.php';

class dalUsuario{
    public function SelectUser(string $usuario){
        $sql = "select * from usuario where usuario LIKE ?;"; // Mandar um valor por parametro
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario)); // Passar o valor por parametro
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