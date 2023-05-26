<?php
    include_once 'C:/xampp/htdocs/servicos/BLL/bllUsuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    /*echo "Usuário: " . $usuario . "</br>";
    echo "Senha: " . $senha . "</br>";*/

    $bll = new \BLL\bllUsuario();

    $objUsuario = $bll->SelectUser($usuario);

    echo "Usuário: " . $objUsuario->getUsuario() . "</br>";
    echo "Senha: " . $objUsuario->getSenha() . "</br>";
?>