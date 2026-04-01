<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$media = ($n1 + $n2 + $n3) / 3;

echo "<div class='resultado'>";
echo "<h2>É um prazer te conhecer $nome $sobrenome</h2>";
echo "<p>Sua média é: $media</p>";
echo "</div>";
?>

</body>
</html>