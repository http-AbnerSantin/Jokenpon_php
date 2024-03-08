<?php 

    $_eu = $_POST["botao"];

    //Inimigo
    $_arr_de_opcoes = ["pedra", "papel", "tesoura"];
    $_numero_aleatorio = rand(0,2);
    $_inimigo = $_arr_de_opcoes[$_numero_aleatorio];


    if((($_eu === "pedra") && ($_inimigo === "papel"))||(($_eu === "papel") && ($_inimigo === "tesoura"))||(($_eu === "tesoura") && ($_inimigo === "pedra"))) {
        echo "Eu: $_eu, Inimigo: $_inimigo, <p class='perder'>EU PERCO</p>"; //conição caso eu perca
    } elseif ((($_eu === "pedra") && ($_inimigo === "tesoura"))||(($_eu === "papel") && ($_inimigo === "pedra"))||(($_eu === "tesoura") && ($_inimigo === "papel"))) {
        echo "Eu: $_eu, Inimigo: $_inimigo, <p class='ganhar'>EU GANHO</p>"; //condicao caso eu ganhe
    } else {
        echo "Eu: $_eu, Inimigo: $_inimigo,<p class='empate'> EMPATE</p>"; //consicao caso de empate
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
    <form action="index.php" method="POST">
        <button>VOLTAR</button>
    </form>
    
</body>
</html>



