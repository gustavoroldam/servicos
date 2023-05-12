<?php
use BLL\bllOperador;
//echo __DIR__ // Mostrar o caminho do arquivo
include_once '../../BLL/blloperador.php';  // Pode colocar o caminho completo que tmb funciona
$bll = new \BLL\bllOperador();
$lstOperador = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <title>Listar Operadores</title>
</head>
<body>
    <h1>Listar Operadores</h1>
    <a class="btn-floating btn-large waves-effect waves-light green" onclick="JavaScript:location.href='insoperador.php'"> <!-- onclick -> Serve para Mudar de Tela -->
        <i class="material-icons">add</i>
    </a>

    <br> <br>

    <table class="striped red lighten-2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ANIVERSÁRIO</th>
            <th>SALÁRIO (R$)</th>
            <th>  </th>
        </tr>
        <?php
            foreach ($lstOperador as $operador){
        ?>
                <tr>
                    <td><?php echo $operador->getId(); ?></td>
                    <td><?php echo $operador->getNome(); ?></td>
                    <td><?php echo $operador->getAniversario(); ?></td>
                    <td><?php echo "R$" . number_format($operador->getSalario(),2,",",".");?></td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtoperador.php?id=' +
                         <?php echo $operador->getId(); ?>"> <!-- "?id=..." passsa os valores para o edit -->
                            <i class="material-icons">edit</i>
                        </a> 
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>