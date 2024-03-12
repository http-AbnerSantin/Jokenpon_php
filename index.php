<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo</title>
</head>
<body>
    <form action="processar.php" method="post">
        <input type="radio" id="pedra" name="botao" value="pedra">
        <label for="pedra">Pedra</label>
        <input type="radio" id="papel" name="botao" value="papel">
        <label for="papel">Papel</label>
        <input type="radio" id="tesoura" name="botao" value="tesoura">
        <label for="tesoura">Tesoura</label>
        <button type="submit">Enviar</button>
    </form>
    
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["botao"])) {
        $valorDoBotao = $_POST["botao"];
        echo "O valor do botão é: " . $valorDoBotao;
    }
}
?>
