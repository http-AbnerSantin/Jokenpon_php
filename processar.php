<?php

    $_eu = $_POST["botao"];

    //Inimigo
    $_arr_de_opcoes = ["pedra", "papel", "tesoura"];
    $_numero_aleatorio = rand(0,2);
    $_inimigo = $_arr_de_opcoes[$_numero_aleatorio];

     $_imagem = "";
     $_imagem_inimigo = "";
     $_resultado = "";


    if((($_eu === "pedra") && ($_inimigo === "papel"))||(($_eu === "papel") && ($_inimigo === "tesoura"))||(($_eu === "tesoura") && ($_inimigo === "pedra"))) {
        $_resultado = "EU PERCO";
        $_imagem = $_eu;
        $_imagem_inimigo = $_inimigo;

    } elseif ((($_eu === "pedra") && ($_inimigo === "tesoura"))||(($_eu === "papel") && ($_inimigo === "pedra"))||(($_eu === "tesoura") && ($_inimigo === "papel"))) {
        $_resultado = "EU GANHO";
        $_imagem = $_eu;
        $_imagem_inimigo = $_inimigo;

    } else if ((($_eu === "pedra") && ($_inimigo === "pedra"))||(($_eu === "papel") && ($_inimigo === "papel"))||(($_eu === "tesoura") && ($_inimigo === ""))) {
        $_resultado = "EMPATE";
        $_imagem = $_eu;
        $_imagem_inimigo = $_inimigo;

    } else {
        $_resultado = "INSIRA UM VALOR VALIDO";
    }

    $_cor_resultado = "";

    if($_resultado === "EU GANHO") {
        $_cor_resultado = "ganhar";
    } else if ($_resultado === "EU PERCO") {
        $_cor_resultado = "perder";
    } else {
        $_cor_resultado = "empate";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="divisao">
        <?php if($_resultado === "EMPATE" || $_resultado === "EU GANHO" || $_resultado === "EU PERCO"): ?>
        <div class="container">
            <h2>Eu: <?= $_eu ?></h2>
            <img src="<?=$_imagem?>.png" alt="naosei">
        </div>
        <div class="container">
            <h2>Inimigo: <?= $_inimigo ?> </h2>
            <img src="<?=$_imagem_inimigo?>.png" alt="naosei">
        </div>
        <h1>Resultado: <span class="<?= $_cor_resultado; ?>"><?= $_resultado ?> </span></h1>
        <form action="index.php" method="POST">
            <button>VOLTAR</button>
        </form>
        <?php else: ?>
            <h1 class="insira"><?= $_resultado ?></h1>
        <form action="index.php" method="POST">
            <button>VOLTAR</button>
        </form>
        <?php endif; ?>
    </div>


</body>
</html>



