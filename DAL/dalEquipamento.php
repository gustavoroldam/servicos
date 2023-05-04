<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\servicos\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\servicos\MODEL\Equipamento.php';

    class dalEquipamento{
        public function Select(){
            $sql = "select * from equipamento;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($result as $linha){
                $equipamento = new \MODEL\Equipamento();

                $equipamento->setId($linha['id']);
                $equipamento->setNome($linha['nome']);
                $equipamento->setMarca($linha['marca']);
                $equipamento->setValor($linha['valor']);
                $equipamento->setValorhora($linha['valorhora']);
                $equipamento->setStatus($linha['status']);

                $lstEquipamento[] = $equipamento;
            }

            return $lstEquipamento;
        }
    }
?>