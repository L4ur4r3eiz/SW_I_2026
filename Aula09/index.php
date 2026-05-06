<?php
$_MENU = [
    'Home' => '
        <main>
            <h1>Bem-vinda ao meu site</h1>
            <p>Este site foi desenvolvido utilizando PHP dinâmico.</p>
            <p>Aqui você pode conhecer mais sobre mim, minhas experiências e projetos.</p>
        </main>
    ',

    'Sobre' => '
        <main>
            <h1>Sobre mim</h1>
            <p>Sou estudante de tecnologia e estou aprendendo desenvolvimento web.</p>
            <p>Tenho interesse em programação e criação de projetos.</p>
        </main>
    ',

    'Contato' => '
        <main>
            <h1>Contato</h1>
            <p>Email: exemplo@gmail.com</p>
            <p>Telefone: (11) 99999-9999</p>
        </main>
    ',

    'Experiencias' => '
        <main>
            <h1>Experiências</h1>
            <ul>
                <li>Conhecimento básico em C#</li>
                <li>Desenvolvimento com Flutter</li>
                <li>Criação de páginas com PHP</li>
            </ul>
        </main>
    ',

    'Projetos' => '
        <main>
            <h1>Projetos</h1>
            <ul>
                <li>Aplicativo de quiz</li>
                <li>Site dinâmico em PHP</li>
                <li>Exercícios em programação</li>
            </ul>
        </main>
    '
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <img src="img/lua.jpg" class="logo">

    <nav>
        <?php
        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a>';
        }
        ?>
    </nav>
</header>

<?php
$_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

if(array_key_exists($_pagina, $_MENU)){
    echo $_MENU[$_pagina];
} else {
    echo '<main><h1>Página não encontrada</h1></main>';
}
?>

</body>
</html>