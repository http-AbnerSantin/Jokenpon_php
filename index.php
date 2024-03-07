<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <form action="processar.php" method="post">
        <!-- <button type="submit" name="botao" value="Abner">Clique aqui</button> -->
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
    // Verifica se o botão foi enviado no formulário
    if (isset($_POST["botao"])) {
        // Pega o valor do botão
        $valorDoBotao = $_POST["botao"];
        echo "O valor do botão é: " . $valorDoBotao;
    } else {
        echo "Botão não foi enviado.";
    }
}
?>
