<?php
    session_start();
    if ($_SESSION["usuario"] == $_POST["usuario"] && $_SESSION["senha"] == $_POST["senha"]) {
        header("Location: sucesso.php?erro=0");
        exit();
    }
    
    else {
        header("Location: login.php?erro=1");
            exit();
        }
    ?>
    
