<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
        <form class="form" action="autenticar.php" method="POST">
            <h1>Autenticação</h1>
    
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario"/>
</div>
    
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"/>
</div>
    
    
            <div>
                <input type="submit" value="Enviar" />
</div>
            <?php
if(isset($_GET['erro']) && $_GET['erro']==1) { 

    echo "<p>Usuário ou senha inválida!</p>";
}
?>
</body>
</html>
