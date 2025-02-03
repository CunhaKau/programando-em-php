<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch</title>
</head>
<body>
    <?php 
    //condicional switch
    $fruta = "maçã";

    switch ($fruta){
        case "banana":
            echo "A fruta é uma banana!";
        break;
        case "maçã": 
            echo "A fruta é uma maçã!";
        break;
        case "laranja":
            echo "A fruta é uma laranja!";
        break;
        default:
            echo "Fruta desconhecida!";
        break;
    }

    echo "<br>";
    $cor = "verde";

    switch ($cor){
        case "vermelho":
        case "laranja":
            echo "A cor é quente!";
        break;
        case "azul":
        case "verde":
            echo "A cor é fria!";
        break;
        default:
            echo "Cor desconhecida!";
        break;
    }

    echo "<br>";

    $numero = null;

    switch(true){
        case (is_numeric($numero) && $numero < 5):
            echo "O número é menor que 5.";
        break;
        case (is_numeric($numero) && $numero == 5):
            echo "O número é igual a 5.";
        break;
        case (is_numeric($numero) && $numero > 5):
            echo "O número é maior que 5.";
        break;
        default:
            echo "Número não identificado!";
        break;
    }


    ?>
</body>
</html>