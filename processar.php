<?php 

    $_eu = $_POST["botao"];

    //Inimigo
    $_arr_de_opcoes = ["pedra", "papel", "tesoura"];
    $_numero_aleatorio = rand(0,2);
    $_inimigo = $_arr_de_opcoes[$_numero_aleatorio];


    if((($_eu === "pedra") && ($_inimigo === "papel"))||(($_eu === "papel") && ($_inimigo === "tesoura"))||(($_eu === "tesoura") && ($_inimigo === "pedra"))) {
        echo "Eu: $_eu, Inimigo: $_inimigo, EU PERCO"; //conição caso eu perca
    } elseif ((($_eu === "pedra") && ($_inimigo === "tesoura"))||(($_eu === "papel") && ($_inimigo === "pedra"))||(($_eu === "tesoura") && ($_inimigo === "papel"))) {
        echo "Eu: $_eu, Inimigo: $_inimigo, EU GANHO"; //condicao caso eu ganhe
    } else {
        echo "Eu: $_eu, Inimigo: $_inimigo, EMPATE"; //consicao caso de empate
    }

?>



