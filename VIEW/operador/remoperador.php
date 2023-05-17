<?php
    include_once '../../MODEL/Operador.php';
    include_once '../../BLL/blloperador.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllOperador();
    $bll->Delete($id);

    header("location: lstoperador.php"); // Chamada de um codigo dentro do codigo

?>