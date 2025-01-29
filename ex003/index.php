<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários e Variável dentro da variável</title>
</head>
<body>
    <h2> Variável dentro de outra variável </h2>
    <?php 
    //para comentário de uma linha eu uso o barra e barra

    /*
    eu uso 
    para comentar
    várias linhas
    ao mesmo tempo
    */

    $nome = "Ana";
    $sobrenome = "Cunha";
    
    //A variável abaixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";

    echo "$frase";

    ?>
</body>
</html>