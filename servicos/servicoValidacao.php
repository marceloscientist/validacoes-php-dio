<?php 


function validaNome(string $nome): bool {
    if(empty($nome)) {
        setarMensagemDeErro('O nome não pode estar vazio');
        return false;
    }
    else if(strlen($nome) < 3) {
        setarMensagemDeErro('O nome não pode conter menos que 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40) {
        setarMensagemDeErro('O nome não pode conter caracteres maior que 40');
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool {
    if(!is_numeric($idade)) {
        setarMensagemDeErro('Aceita apenas números para idade');
        return false;
    }
    return true;
}


