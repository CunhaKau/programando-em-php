<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primero código</title>
</head>
<body>
    <h2> 

    <?php 

    //Declarando uma variável
    $nome = "Ana";
    $sobrenome = "Cunha";
   
    //A variável pode ser mudada
    $nome = "Ana Claudia";

    //Quebra de linha antes do próximo echo
    //echo "<br> <br>";

    //Declarando uma constante
    const time = "Bahia";
    
    //não consigo alterar a constante
    //time = "Palmeiras";

    echo "Seja-bem vinda, $nome $sobrenome <br> <br> Meu time é " . time;

    ?>
    </h2>
</body>
</html>