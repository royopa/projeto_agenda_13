<?php
include_once '../Model/Usuario.php';
include_once '../Controller/UsuarioController.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usuários cadastrados</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;

        }

        /*Define Fonte para todas as tags listadas abaixo*/

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">


    <header class="w3-container w3-padding-32 w3-center ">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
            Lista de Usuários Cadastrados no Sistema
        </h1>
    </header>

    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $usuario = new UsuarioController();
                    $data = $usuario->gerarLista();
                    foreach ($data as $row) {
                    ?>
                        <tr class="w3-center">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nome']; ?></td>
                            <td>
                                <form action="/Controller/Navegacao.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button name="btnVisualizarUsuario" class="w3-button w3-block w3-blue w3-cell w3-round-large">
                                        <i class="fa fa-user"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey">
        <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-light-grey w3-textblue w3-margin w3-center" style="width: 30%;">
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">
                        Voltar
                    </button>
                </div>
            </div>
        </form>
    </div>



</body>

</html>