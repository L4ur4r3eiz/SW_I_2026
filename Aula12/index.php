<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validar CPF</title>
</head>
<body>
    <div>
        <h1>Validador de CPF</h1>
        <h3>Escreva o seu CPF abaixo:</h3>
        <form action="validar.php" method="POST">
            <input type="text" name="cpf_usuario" placeholder="000.000.000-00" required>
            <br><br>
            <button type="submit">Validar</button>
        </form>
    </div>
</body>
</html>
