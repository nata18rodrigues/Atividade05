<?php
    //classe
    include("../classes/banco.php");
    session_start();

    $joao = new Banco();
    $maria = new Banco();

    $joao->conta = "12345-6";
    $joao->saldo = 100;
    
    $maria->conta = "65432-1";
    $maria->saldo = 5000;

    echo "João possui a conta ".
        $joao->conta. " e Saldo R$ ".$joao->saldo;
    
    echo "<br>";

    echo "Maria possui a conta ".
        $maria->conta. " e Saldo R$ ".$maria->saldo;


    $joao->depositar(900);
    $maria->depositar(900);

    echo "<br><hr>";

    echo "João possui a conta ".
        $joao->conta. " e Saldo R$ ".$joao->saldo;
    echo "<br>";

    echo "Maria possui a conta ".
        $maria->conta. " e Saldo R$ ".$maria->saldo;

    $_SESSION["stock"] = $joao;

    echo "<br><hr>";
    
    var_dump($_SESSION["stock"]);



?>