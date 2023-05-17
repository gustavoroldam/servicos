<?php
// Pegar os Valores da Tabela
include_once '../../BLL/blloperador.php';

$id = $_GET['id'];

$bll = new \BLL\bllOperador();

$operador = $bll->SelectId($id);

//echo $operador->getNome();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Detalhes de Operador</title>
</head>

<body>
    <div class="container teal lighten-5 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->
        <div class="center orange">
            <h1>Detalhes de Operador</h1>
        </div>

        <div class="row">
            <div class="container"> <!-- O Conteiner alinha os Valores -->
                <div class="input-field col s8">
                    <input type="hidden" name="txtId" value="<?php echo $operador->getId(); ?>">
                    <label for="id" class="black-text bold"> <h5> Id: <?php echo $operador->getId(); ?> </h5> </label>
                    <br> <br>
                </div>

                <div class="input-field col s8">
                    <label for="id" class="black-text bold"> <h5> Nome: <?php echo $operador->getNome(); ?> </h5> </label>
                    <br> <br>
                </div>

                <div class="input-field col s8">
                    <label for="id" class="black-text bold"> <h5> Aniversario: <?php echo $operador->getAniversario(); ?> </h5> </label>
                    <br> <br>
                </div>

                <div class="input-field col s8">
                    <label for="id" class="black-text bold"> <h5> Salario: <?php echo $operador->getSalario(); ?> </h5> </label>
                    <br> <br>
                </div>
            </div>
        </div>
        <div class="brown lighten-3 center col s12">
            <br> <!-- O type="submit" ele executa o action="recinsoperador.php" existemte -->
            <button class="waves-effect waves-light btn orange" type="button"
                onclick="JavaScript:location.href='edtoperador.php?id=' + <?php echo $operador->getId(); ?>" > Editar <i class="material-icons">edit</i> 
            </button>

            <button class="waves-effect waves-light btn red" type="button"
                onclick="JavaScript:remover( <?php echo $operador->getId(); ?> );"> Remover <i class="material-icons">delete_forever</i> 
            </button>

            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstoperador.php?'"> Listar <i class="material-icons">list</i> </button>
            <br>
            <br>
        </div>
    </div>

</body>

</html>

<script>
    function remover(id){
        if(confirm('Excluir o Operador ' + id + '?')){
            location.href = 'remoperador.php?id=' + id;
        }
    }
</script>