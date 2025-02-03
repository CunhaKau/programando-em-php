<!DOCTYPE html>
<html lang="pt-">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    //criação de array indexado
    $array = [10, 20, 30, 40];

    //exibindo o array
    echo "Array original: ";
    print_r($array); //print_r() exibe o array de forma legível

    echo "<br>";
    //adicionando um valor ao final array
    $array[] = 50;
    
    //Exibindo o array atualizado
    echo "Array após adicionar 50: ";
    print_r($array);
    
    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1] = 25;

    echo "Array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";
    //Removendo o valor no índice 2
    unset($array[2]);

    echo "Array após remover o valor no índice 2: ";
    print_r($array);
    echo "<br>";
    //Reorganizando os índices do array
    $array = array_values($array);

    //Exibindo o array após remover o índice e reorganizar
    echo "Array após reoganizar os elementos: ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenando o array de forma crescente
    sort($array);

    //Exibindo o array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);

    ?>
</body>
</html>