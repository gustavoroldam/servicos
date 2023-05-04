<?php

use DAL\dalEquipamento;

  include_once '../../DAL/dalEquipamento.php';
  $dal = new \dal\dalEquipamento();
  $lstequipamento = $dal->Select();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <title>Listar Equipamento</title>
</head>
<body>
    <h1>Listar Equipamento</h1>

    <table class="striped purple lighten-2" >
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>MARCA</th>
            <th>VALOR</th>
            <th>VALOR HORA</th>
            <th>STATUS</th>
        </tr>
        <?php 
            foreach ($lstequipamento as $equipamento){
        ?>
            <tr>
                <td><?php echo $equipamento->getId(); ?></td>
                <td><?php echo $equipamento->getNome(); ?></td>
                <td><?php echo $equipamento->getMarca(); ?></td>
                <td><?php echo "R$" . $equipamento->getValor(); ?></td>
                <td><?php echo "R$" . $equipamento->getValorhora(); ?></td>
                <td><?php echo $equipamento->getStatus(); ?></td>                
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>