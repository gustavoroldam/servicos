<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\servicos\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\servicos\MODEL\Area.php';

    class dalArea{
        public function Select(){
            $sql = "select * from area;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($result as $linha){
                $area = new \MODEL\Area();

                $area->setId($linha['id']);
                $area->setNome($linha['nome']);
                $area->setTipo($linha['tipo']);
                $area->setHectares($linha['hectares']);

                $lstArea[] = $area;
            }

            return $lstArea;
        }
    }
?>