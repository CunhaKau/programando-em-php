<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>
    <h2>
    <?php 
    //variável do tipo string 
    $sobrenome = "Cunha";

    //variável do tipo int 
    $idade = 35;

    //variável do tipo float
    $peso = 118.5;

    //variável do tipo boolean (verdadeiro ou falso)
    $casada = false;

    echo "$sobrenome $idade $peso  ";

    //Método 1: Usando var_dump para exibir o valor booleano
    var_dump($casada); // Exibe 'bool(false)'

    //Método 2: Usando uma conversão booleana para string
    echo ($casada ? "Casada" : "Não é casada"); //Exibe 'Não é casada'
    ?>
    </h2>
</body>
</html>