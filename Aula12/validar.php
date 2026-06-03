<?php
$cpfTexto = $_POST['cpf_usuario'];
$cpfLimpo = preg_replace('/[^0-9]/', '', $cpfTexto);

$lista = str_split($cpfLimpo);

$soma1 = 0;

for ($i = 0; $i < 9; $i++) {
    
    $soma1 = $soma1 + ($lista[$i] * (10 - $i));
}
$resto1 = ($soma1 * 10) % 11;

if ($resto1 == 10) {
    $resto1 = 0;
}

$soma2 = 0;

for ($i = 0; $i < 10; $i++) {
    $soma2 = $soma2 + ($lista[$i] * (11 - $i));
}

$resto2 = ($soma2 * 10) % 11;

if ($resto2 == 10) {
    $resto2 = 0;
}

if ($lista[9] == $resto1 && $lista[10] == $resto2) {
    echo "<h1>Este CPF é válido!</h1>";
} else {
    echo "<h1>Este CPF é inválido!</h1>";
}

echo "<br><a href='index.php'><button>Voltar e testar outro</button></a>";
