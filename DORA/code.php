<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$senha = $_POST["senha"];

function validarEmail($email)
{
    $conta = "/[a-zA-Z0-9\._-]+@";
    $domino = "[a-zA-Z0-9\._-]+.";
    $endereco_email = $conta . $domino;

    if (preg_match($endereco_email, $email))
        return true;
    else
        return false;
}

function isCPFValido($valor)
{

    $valor = str_replace(array('.', '-', '/'), "", $valor);
    $cpf = str_pad(preg_replace('[^0-9]', '', $valor), 11, '0', STR_PAD_LEFT);

    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') :
        return false;
    else :
        for ($t = 9; $t < 11; $t++) :
            for ($d = 0, $c = 0; $c < $t; $c++) :
                $d += $cpf{
                    $c} * (($t + 1) - $c);
            endfor;
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{
                $c} != $d) :
                return false;
            endif;
        endfor;
        return true;
    endif;
}

if (preg_match("qweértyuúiíìopaãsdfghjklçzxcvbnmQWEÉRTYUÚIÍÌOPAÃSDFGHJKLÇZXCVBNM ", $nome)) {
    echo "Passou!";
} else {
    echo "Não Passou!";
}

if (validarEmail($email)) :
    echo 'E-mail válido.';
else :
    echo 'E-mail inválido.';
endif;

if (preg_match('/^\([0-9]{2}\)?\s?[0-9]{4,5}-[0-9]{4}$/', $telefone)) :
    echo 'Telefone válido';
else :
    echo 'Telefone inválido';
endif;

if (isCPFValido($cpf)) :
    echo 'CPF válido.';
else :
    echo 'CPF inválido.';
endif;

if (preg_match("qweértyuúiíìopaãsdfghjklçzxcvbnmQWEÉRTYUÚIÍÌOPAÃSDFGHJKLÇZXCVBNM ", $endereco)) {
    echo "Passou!";
} else {
    echo "Não Passou!";
}

function validarSenha($password) {
    $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{8,36}$/';

    return preg_match($pattern, $password) ? true : false;
}

if (validarSenha($senha)) :
    echo 'Senha válida.';
else :
    echo 'Senha inválida.';
endif;
