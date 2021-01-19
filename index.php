<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Inscrição para competição</p>
    <form action="script.php" method="post">
        <?php 
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['messagem-de-sucesso']:'';
            if(!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso
            }

            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']:'';
            if(!empty($mensagemDeErro)) {
                echo $mensagemDeErro
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" id="nome" /></p>
        <p>Seu e-mail: <input type="number" name="idade" id="idade" /></p>
        <p>Seu nome: <input type="submit" value="Me inscrever agora!" /></p>
    </form>
    
</body>
</html>