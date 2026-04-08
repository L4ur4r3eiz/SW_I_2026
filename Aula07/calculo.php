<?php
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$faltas = $_POST["faltas"];

if ($salario <= 1621) {
    $inss = $salario * 0.075;
} elseif ($salario <= 2902.84) {
    $inss = $salario * 0.09;
} elseif ($salario <= 4354.27) {
    $inss = $salario * 0.12;
} elseif ($salario <= 8475.55) {
    $inss = $salario * 0.14;
} else {
    $inss = 8475.55 * 0.14;
}

$desconto_faltas = $faltas * ($salario / 30);
$vt = $salario * 0.06;

$total_descontos = $inss + $desconto_faltas + $vt;
$salario_final = $salario - $total_descontos;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Resultado</h2>

    <p><?php echo $nome; ?>, o total do seu salario é:</p>

    <h3>R$ <?php echo number_format($salario_final, 2, ',', '.'); ?></h3>

    <a href="index.html">
        <button>Voltar</button>
    </a>
</div>

</body>
</html>
