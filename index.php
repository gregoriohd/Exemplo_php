<?php

$variavel = "Gregorio Cardoso dos Santos, Gustavo Azevedo dos Santos";

// isset verifica se a variavel foi inicializada com valor
if (isset($variavel)) {
    echo "valor nao nulo <br>";
} else {
    echo "valor nulo <br>";
}

// o uso do operador ?? similoar ao isset
$retorno = $variavel ?? "valor nulo";

echo $retorno . "<br><br>";

echo "Tamanho da String " . $variavel . " <br>";

// verifica o tamanho da string
$tamanho_str = strlen($variavel);

echo $tamanho_str;

// retorna a posicao do array com o caractere indicado 
$posicao = strpos($variavel, 'g');

echo "<br>A posicao do caractere g encontra-se " . $posicao . " do array";

// retorna a posicao do array com o caractere indicado com 
// busca iniciado apartir do inicio indicado
$posicao = strpos($variavel, 'r', 2);

echo "<br>A posicao do caractere r encontra-se " . $posicao . " do array inicado a contar da posicao 2 <br>";

// busca da palavra ou caractere indicado iniciando do comeco ate o final da string
$busca_inicio = strchr($variavel, "dos");
echo "resultado da busca do trecho -dos- iniciando apartir do inicio da string ----- " . $busca_inicio . "<br>";

// busca da palavra ou caractere indicado iniciando do final da string para o final da mesma
$busca_fim = strrchr($variavel, "dos");
echo "resultado da busca do trecho -dos- iniciando a partir do fim da string " . $busca_fim . "<br>";

// retorna a substring apartir da posicao inicial informada
$substring = substr($variavel, 28);

echo $substring . "<br><br>";

// retorna a substring apartir da posicao inicial informada e do tamano informado
$substring = substr($variavel, 28, 8);

echo $substring . "<br><br>";

// encontra e subtitui a palavra informada dentro da string
$substituir = str_replace(" Cardoso dos", "", $variavel);

echo $substituir . "<br>";

// for ($i = 0; $i < 10; $i++) {
//     echo chr($i)  . "<br>";
// }

// converte para minusculas

$minusculo = strtolower($variavel);

echo $minusculo . "<br>";

$maiusculo = strtoupper($variavel);

//
echo $maiusculo . "<br>";

// somente a primeira letra em maiusculo
$primeira_letra = ucfirst($minusculo);

echo $primeira_letra . "<br>";

// cada palavra com letra maiuscula
$letra_cada_palavra = ucwords($minusculo);

echo $letra_cada_palavra_maiusculo . "<br>";



// Criando um salt aleatório e seguro
$salt = '$6$rounds=5000$' . bin2hex(random_bytes(16)) . '$'; // $6$ indica SHA-512, rounds define o número de iterações


$hash_crypto = crypt("123g456g", $salt);

echo $hash_crypto . "<br>";


// Verificando a senha
$inputPassword = "123g456g";
if (crypt($inputPassword, $hash_crypto) === $hash_crypto) {
    echo "Senha válida!\n";
} else {
    echo "Senha incorreta!\n";
}
