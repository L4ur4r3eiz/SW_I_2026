<?php
    $_MENU = [
        'Home' => '<h1>Pagina inicial</h1>',
        'Sobre' => '<h1>Sobre page aqui</h1>',
        'Contato' => '<h1>Contato page aqui</h1>',
        'Experiencias' => '<h1>Minhas experiências</h1>',
        'Projetos' => '<h1>Meus projetos</h1>'
    ];
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP Test</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<header class="alonso">

    <?php
        echo '<a class="logo"><img src="img/lua.jpg" alt="Logo"></a>';

        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a> | ';
        }
    ?>

</header>

<body>    

    <?php
        $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

        if(array_key_exists($_pagina, $_MENU)){
            echo $_MENU[$_pagina];
        } else {
            echo '<h1>Página não encontrada</h1>';
        }
    ?>  

</body>
</html>