<?php 

function validaNome(string $nome): bool {
    if(empty($nome)) {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio';
        return false;
    }
    else if(strlen($nome) < 3) {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos que 3 caracteres';
        return false;
    }
    else if(strlen($nome) > 40) {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter caracteres maior que 40';
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool {
    if(!is_numeric($idade)) {
        $_SESSION['mensagem-de-erro'] = 'Aceita apenas números para idade';
        return false;
    }
}


