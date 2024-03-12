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
        <select name="botao" id="teste">
            <option value="tesoura">Tesoura</option>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
        </select>
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
