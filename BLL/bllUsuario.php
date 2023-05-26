<?php
    namespace BLL;
    use DAL\dalUsuario;

    include_once 'C:/xampp/htdocs/servicos/DAL/dalUsuario.php';

    class bllUsuario{
        public function SelectUser(string $usuario){
            $dal = new \DAL\dalUsuario();
            //linhas de código com regras de negocio

            return $dal->SelectUser($usuario);
        }
    }
?>