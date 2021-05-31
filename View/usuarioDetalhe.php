<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- div detalhe usuário -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="divDetalhes">
        <h2 class="w3-text-cyan">Detalhe Usuário</h2>
    </div>

    <div class="w3-container">
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $usuarioDetalhe->getId(); ?></td>
                <td><?php echo $usuarioDetalhe->getNome(); ?></td>
                <td><?php echo $usuarioDetalhe->getEmail(); ?></td>
            </tbody>
        </table>
    </div>

    <div class="w3-container">
        <div class="w3-padding-128 w3-content w3-text-grey" id="divFormacao">
            <h2 class="w3-text-cyan">Formação Acadêmica</h2>
        </div>
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <!-- código em php que percorerrá a base de dados -->
                <?php
                require_once '../Controller/OutrasFormacoesController.php';
                $fCon = new OutrasFormacoesController();
                $idUsuario = $usuarioDetalhe->getId();
                $data = $fCon->gerarLista($idUsuario);
                foreach ($data as $row) {
                ?>

                    <tr class="w3-center">
                        <td><?php echo $row['inicio']; ?></td>
                        <td><?php echo $row['fim']; ?></td>
                        <td><?php echo $row['descricao']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="w3-container">
        <div class="w3-padding-128 w3-content w3-text-grey" id="divExperiencia">
            <h2 class="w3-text-cyan">Experiência Profissional</h2>
        </div>
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <!-- código em php que percorerrá a base de dados -->
                <?php
                require_once '../Controller/ExperienciaProfissionalController.php';
                $fCon = new ExperienciaProfissionalController();
                $idUsuario = $usuarioDetalhe->getId();
                $data = $fCon->gerarLista($idUsuario);
                foreach ($data as $row) {
                ?>

                    <tr class="w3-center">
                        <td><?php echo $row['inicio']; ?></td>
                        <td><?php echo $row['fim']; ?></td>
                        <td><?php echo $row['empresa']; ?></td>
                        <td><?php echo $row['descricao']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>