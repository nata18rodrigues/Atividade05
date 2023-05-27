<?php
    include("../classes/banco.php");
    session_start();


    var_dump($_SESSION["stock"]);



    $_SESSION["stock"]->depositar(8000);
    echo "<br><hr>";
    echo "Conta: ".$_SESSION["stock"]->conta;
    echo "<br>";
    echo "Saldo R$ ".$_SESSION["stock"]->saldo;



?>