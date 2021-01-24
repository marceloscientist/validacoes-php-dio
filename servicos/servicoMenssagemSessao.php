<?php

session_start();

function setarMensagemDeSucesso(string $mensagem) : void {
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemDeSucesso() : string {
    if(isset($_SESSION['mensagem-de-sucesso'])) {
        return $_SESSION['mensagem-de-sucesso'];
    }
    else {
        return '';
    }
}

function setarMensagemDeErro(string $mensagem) : void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemDeErro() : string {
    if(isset($_SESSION['mensagem-de-erro'])) {
        return $_SESSION['mensagem-de-erro'];
    }
    else {
        return '';
    }
}

function removerMensagemDeSucesso() : void {
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}

function removerMensagemDeErro() : void {
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}
