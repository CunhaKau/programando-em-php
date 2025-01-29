<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <?php 
    $soma = 20 + 20;
    $subtracao = 10 - 5; 
    $divisao = 5 / 2;
    $resto = 5 % 2;
    $multiplicacao = 5 * 3;
    $potenciacao = 2 ** 3;

    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtracao <br>";
    echo "Resultado da divisão é $divisao <br>";
    echo "O resto da divisão é $resto <br>";
    echo "Resultado da multiplicação é $multiplicacao <br>";
    echo "Resultado da Potenciação é $potenciacao <br>";


    /* ordem de grandeza
    primeiro = () parênteses
    fora do parênteses se calcula na ordem abaixo
    segundo = potenciação
    terceiro = multiplicação
    quarto = divisão
    quinto = soma
    sexto = subtração
    */


    //Primeira expressão: (3 + 2) * 4
    $valor1 = (3 + 2) * 4;

    $a = 3;
    $b = 2;
    $c = 4;
    $calculo = ($a + $b) * $c;

    //Segunda expressão: (2 * (2 + (2 - 1))) + 8 * 2
    $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;


    // Exibindo os resultados - concatenação
    echo "Resultado da primeira expressão: " . $valor1 . "<br>";
    echo "Resultado da segunda expressão: " . $valor2 . "<br>";
    echo "Resultado do cálculo das variáveis" . $calculo . "<br>";
    ?>
    

</body>
</html>