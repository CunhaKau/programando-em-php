<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h2>Operadores de Atribuição</h2>
    <?php 
    //string
    $rua = "Rua Amador Bueno";
    //Atribuição com concatenação
    $rua .= " na Cidade de São Paulo";

    //float
    $preco = 2.45;
    //Atribuição de soma
    $preco += 2.30;
    //Atribuição de subtração
    $preco -= 1.30;

    // Formata o número para usar vírgula como separador decimal
    $preco_formatado = number_format($preco, 2, ',', '.');

    //Exibe o resultado - por interpolação
    echo "$rua, <br> Preço R$ $preco_formatado";

    ?>
</body>
</html>