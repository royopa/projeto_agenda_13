<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <title>Enlatados Juarez</title>
</head>

<body>



    <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
        <h2 class="w3-text-cyan">Dados Pessoais</h2>
    </div>

    <form action="" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:
70%;">
        <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%;">
                <i class="w3-xxlarge fa fa-user"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo"
                    value="">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%;">
                <i class="w3-xxlarge fa fa-calendar"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%;">
                <i class="w3-xxlarge fa fa-drivers-license"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text"
                    placeholder="CPF: 33333333333" value="">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%;">
                <i class="w3-xxlarge fa fa-envelope-o"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email"
                    value="">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-center" style="">
                <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cell
w3-round-large" style="width: 90%;">Atualizar</button>
            </div>
        </div>
    </form>

</body>

</html>