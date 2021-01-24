<?php 
    include 'servicos/servicoMenssagemSessao.php';
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
            $mensagemDeSucesso = obterMensagemDeSucesso();
            if(!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemDeErro();
            if(!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" id="nome" /></p>
        <p>Seu idade: <input type="number" name="idade" id="idade" /></p>
        <p><input type="submit" value="Me inscrever agora!" /></p>
    </form>
    
</body>
</html>