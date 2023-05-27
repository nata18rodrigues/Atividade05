<?php
    include("../classes/cliente.php");
    session_start();


    $pessoa = new Cliente();
    $pessoa->nome = "Josefina";
    $pessoa->cpf = "123456789/00";
    $pessoa->saldo = 1000;

    $_SESSION["people"] = $pessoa;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=im, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="cliente3.php">
        <label>Ação de Emprestimo</label><br>
        <select name="type">
            <option value="fazer_emprestimo">Fazer Emprestimo</option>
            <option value="quitar_emprestimo">Quitar Emprestimo</option>
        </select><br><br>
        <input type="number" name="valor" required/>
        <input type="submit" value="Enter"/>
        <hr>
    </form>
</body>
</html>





