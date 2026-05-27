<?php

$menu = [
    "Home" => "home",
    "Jogo 01" => "jogo1",
    "Jogo 02" => "jogo2",
    "Curiosidades" => "curiosidades",
    "Extra" => "extra"
];

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>The Last of Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>

    <div class="logo">
        <img src="img/logo-tlous sem fundo.png" alt="">
    </div>

    <nav>
        <?php
            foreach($menu as $nome => $link){
                echo "<a href='?pagina=$link'>$nome</a>";
            }
        ?>
    </nav>

</header>

<main>

<?php

$arquivo = $pagina . ".php";

if(file_exists($arquivo)){
    include($arquivo);
}else{
    echo "<h2>Página não encontrada</h2>";
}

?>

</main>

</body>
</html>