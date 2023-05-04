<?php
    use DAL\dalArea;

    include_once '../../DAL/dalArea.php';
    $dal = new \DAL\dalArea();
    $lstArea = $dal->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Listar Area</title>
</head>
<body>
    <h1>Listar Area</h1>

    <table class="striped cyan lighten-2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>TIPO</th>
            <th>HECTARES</th>
        </tr>
        <?php
            foreach ($lstArea as $area){
        ?>
        <tr>
            <td><?php echo $area->getId(); ?></td>
            <td><?php echo $area->getNome(); ?></td>
            <td><?php echo $area->getTipo(); ?></td>
            <td><?php echo $area->getHectares(); ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>