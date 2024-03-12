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

        
    } else {
        $_resultado = "EMPATE";
        $_imagem = $_eu;
        $_imagem_inimigo = $_inimigo;

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
    <h2>Eu: <?= $_eu ?> <img src="<?=$_imagem?>.png" alt="naosei"></h2>
    <h2>Inimigo: <?= $_inimigo ?> <img src="<?=$_imagem_inimigo?>.png" alt="naosei"></h2>
    <h1>Resultado: <?= $_resultado ?></h1>
    <form action="index.php" method="POST">
        <button>VOLTAR</button>
    </form>
    
    
</body>
</html>



