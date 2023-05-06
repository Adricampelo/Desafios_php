<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>
<body>
    <head>
        <h1>Resultado da conversão de moedas</h1>
    </head>
    <main>
        <?php 
        $val = $_GET["val"] ?? 0 ;

        $cotação = 5.17;

        $dolar = $val/$cotação;
        
        echo"<p> Seu valor convertido em dólar é igual a $dolar";
        ?>
    </main>
</body>
</html>