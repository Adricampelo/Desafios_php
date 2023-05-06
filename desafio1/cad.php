<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do processamento</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
        $num = $_GET["num"] ?? 0;
        $ant = $num + 1;
        $suc = $num - 1;
        echo "<p>O número escolhido é $num";
        echo "<p>Seu antecessor é $ant";
        echo "<p>Seu antecessor é $suc";
        ?>
    </main>
    
</body>
</html>