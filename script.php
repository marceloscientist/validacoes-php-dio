<?php 

include 'servicos/servicoMenssagemSessao.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoClassificacao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

classificacao($nome, $idade);
header('location: index.php');






