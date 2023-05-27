<?php
    include("../classes/banco.php");
    session_start();


    $_SESSION["stock"]->sacar(8000);


?>