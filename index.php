<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portiflio</title>
</head>

<body>
    <h1>
        <?php

        $projetos = [
            "LTD - Centro de Treinamento",
            "Painel de Controle de Acesso",
            "Sistema de Controle de Estoque"

        ];

        $nome = "Bruno";

        $saudacao = $nome . " seja bem vindo ao meu portifolio";

        $ano = date("Y");



        echo $saudacao;
        ?>
    </h1>

    <h2>
        <?php
        echo "variaveis:"

        ?>
    </h2>

    <h3>
        <?= $ano ?>
    </h3>


</body>

</html>