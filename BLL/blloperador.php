<?php
    namespace BLL;
    use DAL\dalOperador;

    include_once '../../DAL/dalOperador.php';

    class bllOperador{
        public function Select(){
            $dal = new \DAL\dalOperador();
            //linhas de código com regras de negocio
            return $dal->Select();
        }
    }

?>