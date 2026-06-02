<?php

$texto = $_POST['texto'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Resultado</h1>

    <div class="resultado">
        <h3>Texto digitado:</h3>
        <?php echo $texto; ?>
    </div>

    <div class="resultado">
        <h3>Length</h3>
        <?php echo strlen($texto); ?>
    </div>

    <div class="resultado">
        <h3>Split</h3>

        <pre>
<?php print_r(str_split($texto)); ?>
        </pre>
    </div>

    <div class="resultado">
        <h3>Replace</h3>

        <?php
            echo preg_replace('/[^0-9]/', '', $texto);
            
        ?>

    </div>

    <button><a href="index.php" class="voltar">Voltar</a></button>

</div>

</body>
</html>