<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- div outras formações -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="divOutrasFormacoes">
        <h2 class="w3-text-cyan">Outras Formações</h2>
    </div>
    
    <div>
        <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioOF"
                        type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Ex.: Curso de Inglês - Inglês City">
                        </div>
                    </div>
                    
                    <div class="w3-row w3-section">
                        <div class="w3-center">
                            <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                <!-- código em php que percorerrá a base de dados -->        
                <?php
                    require_once '../Controller/OutrasFormacoesController.php';
                    $fCon = new OutrasFormacoesController();
                    $data = $fCon->gerarLista(1);
                    foreach ($data as $row) {
                ?>

                    <tr class="w3-center">
                        <td><?php echo $row['inicio']; ?></td>
                        <td><?php echo $row['fim']; ?></td>
                        <td><?php echo $row['descricao']; ?></td>
                        <td>
                        <!--

                        <form action="/Controller/Navegacao.php" method="post">
                        <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
                        <button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-round-
                        large">
                        <i class="fa fa-user-times"></i> </button></td>
                        </form>';
                    -->
                        Remover

                        </td>
                    </tr>                
                <?php
                }
                ?>

                </tbody>
            </table>
        </div>  
    </body>
</html>
            

