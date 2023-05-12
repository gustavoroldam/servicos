<?php
    include_once '../../MODEL/Operador.php';
    include_once '../../BLL/blloperador.php';

    $operador = new \MODEL\Operador();
    $bll = new \BLL\bllOperador();

    $operador->setId($_POST['txtId']);
    $operador->setNome($_POST['txtNome']);
    $operador->setAniversario($_POST['txtAniversario']);
    $operador->setSalario($_POST['txtSalario']);

    $bll->Update($operador);

    header("location: lstoperador.php"); // Chamada de um codigo dentro do codigo

?>