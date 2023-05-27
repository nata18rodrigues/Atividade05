<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=im, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="cliente4.php">
        <label>Nova Ação de Emprestimo</label><br>
        <input type="submit" value="Enter"/>
        <hr>
    </form>
</body>
</html>
<?php
    include("../classes/cliente.php");
    session_start();
    
    $valor = $_GET['valor'];
    $type = $_GET['type'];
    $pessoa = $_SESSION["people"];


    if (!empty($valor) && !empty($type)){
        if ($type =="fazer_emprestimo") {
            var_dump("#1 " + $pessoa->emprestimo($valor));
            $_SESSION["people"] = $pessoa;
            
        } else {
            var_dump("#2 " +$pessoa->quitar_emprestimo($valor));
            $_SESSION["people"] = $pessoa;
        }
    }
?>

