<?php
    include_once 'C:/xampp/htdocs/servicos/BLL/bllUsuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    /*echo "Usuário: " . $usuario . "</br>";
    echo "Senha: " . $senha . "</br>";*/

    $bll = new \BLL\bllUsuario();

    $objUsuario = $bll->SelectUser($usuario);

    if($objUsuario != null){
        if (md5($senha) == $objUsuario->getSenha()) {
            /*echo "Usuário: " . $objUsuario->getUsuario() . "</br>";
            echo "Senha: " . $objUsuario->getSenha() . "</br>";*/

            session_start();
            $_SESSION['login'] = $objUsuario->getUsuario();
            header("location:menu.php");
        }
        else{
            header("location:index.php");
        }
    }
    else{
        header("location:index.php");
    }

?>