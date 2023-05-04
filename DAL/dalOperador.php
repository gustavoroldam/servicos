<?php
namespace DAL; // Informar onde está o arquivo

include_once 'C:\xampp\htdocs\servicos\DAL\conexao.php'; // require 'conexao.php' -> o "require" se n conseguir acessar ele para o programa
// o "_once" serve para caso n exista a inclusão ele cria se n ele segue em frente

include 'C:\xampp\htdocs\servicos\MODEL\Operador.php';

class dalOperador{
    public function Select(){
        $sql = "select * from operador;";
        $con = Conexao::conectar();
        $result = $con->query($sql); // Faz uma leitura de dados foita no BD ("select * from operador"-> Ridder de Dados)
        $con = Conexao::desconectar();
        //return $lstOperador;

        foreach($result as $linha){
            $operador = new \MODEL\Operador(); // Instanciando um Obj da Classe Operador

            $operador->setId($linha['id']); // Pegando a linha do BD e colocando no Obj
            $operador->setNome($linha['nome']);

            $data = date_create($linha['aniversario']);
            $operador->setAniversario(date_format($data, 'd-m-y'));
            $operador->setSalario($linha['salario']);

            $lstOperador[] = $operador;
        }
        return $lstOperador; // Não vai retornar como linha e sim como objeto
        // Rider é os dados do BD
    }

    public function SelectID(int $id){

    }

    public function Insert(){

    }

    public function Update(){
        
    }

    public function Delete(){

    }
}

?>