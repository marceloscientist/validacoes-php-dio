<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18
 * Time: 00:29
 */
function classificacao(string $nome, string $idade) : ?string
{
    $catetorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemDeErro();
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemDeSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemDeSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemDeSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemDeSucesso();
        return obterMensagemDeErro();
    }
}