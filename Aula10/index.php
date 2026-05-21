<?php

$menu = [
    "Home" => "home",
    "Sobre" => "sobre",
    "Projetos" => "projetos",
    "Experiencias" => "experiencias",
    "Contato" => "contato"
];

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>

    <div class="logo">
        <img src="img\logo-tlous sem fundo.png" alt="">
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

switch($pagina){

    case 'home':
        echo "
            <h2>Como foi Criado</h2>
            <h4>Origem e Divisão na Naughty Dog: O projeto nasceu em 2009, logo após a finalização de Uncharted 2:
             Among Thieves. A Naughty Dog tomou a decisão inédita de dividir o estúdio em duas equipes independentes:
            uma continuaria com Uncharted 3, enquanto a outra, liderada pelo diretor de jogo Bruce Straley e pelo roteirista
            Neil Druckmann, recebeu total liberdade para criar uma nova franquia.
            </h4>

            <h4>A Ciência por Trás da Infecção: O conceito central foi inspirado em um episódio do documentário de natureza
            Planet Earth da BBC. O episódio detalhava a ação real do fungo parasita Ophiocordyceps unilateralis,
            que infecta formigas na floresta tropical, altera seu comportamento cerebral e consome seus tecidos de dentro para
            fora. A equipe utilizou essa premissa científica verídica e a adaptou para a biologia humana, criando a Infecção
            Cerebral por Cordyceps (ICC).
            </h4>

            <h4>Revolução na Captura de Movimento: O estúdio descartou as animações tradicionais feitas à mão. Eles optaram pela
            tecnologia avançada de Performance Capture nos estúdios da Sony PlayStation. Os atores principais, Troy Baker (Joel)]
            e Ashley Johnson (Ellie), gravaram a voz e a movimentação corporal simultaneamente no mesmo cenário físico. Isso
            garantiu o realismo extremo nos micro-movimentos faciais e na química dramática dos diálogos.
            </h4>

            <h4>Mudança de Foco no Gênero: Em vez de focar no terror tradicional de \"zumbis\" ou no combate focado em armas pesadas,
             a equipe projetou o jogo como um \"documentário de sobrevivência natural\". A prioridade máxima do design de som e do 
             roteiro foi desenvolver a tensão psicológica gerada pela escassez humana e a relação afetiva e paternal que nasce em um 
             ambiente hostil. 
            </h4>

        ";
    break;

    case 'sobre':
        echo "
            <h2>The Last of Us - Parte I</h2>
            <h4>Premissa Narrativa e Linha do Tempo: Lançado originalmente em junho de 2013 para PlayStation 3 
            (e reconstruído do zero em 2022 como The Last of Us Part I para PS5 e PC), o jogo se passa em 2033 — 
            vinte anos após a mutação do fungo dizimar 60% da população global. O enredo acompanha Joel Miller,
            um contrabandista texano amargurado pela perda da filha, que é contratado para contrabandear Ellie Williams,
            uma órfã de 14 anos, para fora de uma rígida Zona de Quarentena militar controlada pela FEDRA.
            </h4>

            <h4>O Mistério da Imunidade: A grande reviravolta da trama acontece quando Joel descobre que Ellie sobreviveu a
            uma mordida de infectado há semanas sem apresentar sintomas. Ela é a única humana imune conhecida no planeta.
            O objetivo passa a ser cruzar o território devastado dos Estados Unidos até encontrar os laboratórios dos Vagalumes,
            uma milícia rebelde que pretende usar o fungo mutante no cérebro de Ellie para sintetizar uma cura global.
            </h4>

            <h4>Mecânicas de Sobrevivência e Gameplay: O estilo de jogo mistura ação em terceira pessoa com mecânicas rigorosas
            de Survival Horror. O jogador precisa gerenciar itens escassos através do menu de crafting em tempo real
            (criando kits médicos, coquetéis molotov e bombas com pedaços de pano e lâminas). O combate incentiva a furtividade,
            permitindo usar o \"Modo de Escuta\" para rastrear o som dos inimigos através das paredes.
            </h4>

            <h4>Estágios Iniciais dos Infectados: O ecossistema biológico dos inimigos é dividido pelo tempo de exposição ao fungo:
            Corredores (Runners): Infectados há poucos dias, ágeis, agressivos e mantêm vestígios de visão humana.
            Perseguidores (Stalkers): Escondem-se nas sombras e flanqueiam o jogador silenciosamente.
            Estaladores (Clickers): Infectados há anos. O fungo estourou seus crânios, deixando-os totalmente cegos. Eles usam a 
            ecolocalização através de estalos vocais para caçar e matam o jogador instantaneamente caso o alcancem. [1, 2, 3, 4, 5, 6]
            </h4>
        ";
    break;

    case 'projetos':
        echo "
            <h2>The Last of Us - Parte II </h2>
            <h4>Contexto e Linha do Tempo: Lançado em junho de 2020 para PS4 (recebendo a versão Remastered para PS5 em 2024), o 
            jogo dá um salto de 5 anos no tempo. Joel e Ellie vivem integrados em uma próspera e protegida comunidade de sobreviventes
            na cidade de Jackson, Wyoming. No entanto, o relacionamento amoroso de pai e filha está quebrado após Ellie descobrir a
            verdade sobre o massacre nos laboratórios dos Vagalumes no final do primeiro jogo.
            </h4>

            <h4>A Estrutura da Narrativa Espelhada: Após um evento brutal e traumático desestabilizar a colônia, Ellie parte em uma
            caçada vingativa implacável em direção às ruínas inundadas de Seattle. A grande inovação conceitual de The Last of Us
            Part II é a sua estrutura dividida em duas metades idênticas de 3 dias: na primeira metade, jogamos com a fúria cega
            de Ellie; na metade seguinte, controlamos Abby Anderson, uma soldada de elite da facção WLF e antagonista direta da
            história. O jogo obriga o público a vivenciar as motivações, dores e traumas da \"vilã\", desconstruindo o conceito de heroísmo.
            </h4>

            <h4>Aprimoramentos de Gameplay e Inteligência Artificial: A jogabilidade foi verticalizada e expandida.
            Os personagens ganharam botões dedicados para esquiva física, salto de plataformas e a habilidade de rastejar de bruços
            na vegetação alta para camuflagem total. A Inteligência Artificial dos inimigos humanos foi aprimorada: eles agora 
            se comunicam por nomes próprios, expressam luto ao ver aliados caídos e utilizam cães farejadores que rastreiam o odor
            corporal deixado pelo jogador no cenário.
            </h4>

            <h4>Os Novos Monstros do Cordyceps: O fungo evoluiu devido ao clima úmido de Seattle, apresentando os Trôpegos (Shamblers),
            criaturas robustas que exalam nuvens de ácido corrosivo, e o Rei dos Ratos (Rat King), uma massa colossal e mutante formada
            pela fusão de vários infectados que estavam presos juntos em uma ala hospitalar desde o início do surto. [1, 2, 3, 4, 5]
            </h4>
        ";
    break;

    case 'experiencias':
        echo "
            <h2>Curiosidades Tecnológicas e Segredos Escondidos</h2>
            <h4>A Engenharia de Som dos Estaladores: Os sons e estalos guturais dos Clickers são analógicos.
            Eles foram criados nos estúdios da Sony sem manipulação digital ou efeitos eletrônicos. A dubladora
            norte-americana Misty Lee desenvolveu uma técnica de estalo isolado usando as cordas vocais profundas 
            da garganta, técnica que se tornou a marca registrada de terror da franquia.
            </h4>

            <h4>Física Realista de Cordas e o Minigame do Violão: Na Parte II, o minigame interativo onde o jogador usa
            o painel tátil do controle DualSense para tocar violão conta com precisão matemática. Os engenheiros da Naughty
            Dog modelaram o motor gráfico para fazer com que os dedos virtuais dos personagens se posicionassem nas casas exatas
            dos acordes reais da música executada (como tons de Mi menor ou Dó maior).
            </h4>

            <h4>Participações Cruzadas com a Adaptação da HBO: Para homenagear a obra original, os dubladores originais dos jogos
            foram inseridos em papéis de destaque na série de televisão: Ashley Johnson (a Ellie digital) interpreta Anna, a mãe 
            biológica de Ellie na série; Troy Baker (o Joel digital) assume o papel de James, um sobrevivente sádico de uma
            comunidade canibal.
            </h4>

            <h4>Conexões Internas no Universo da Produtora: Em várias lojas abandonadas no cenário pós-apocalíptico de The Last of Us,
            é possível encontrar tabuleiros de jogos de tabuleiro reais baseados em Uncharted, jornais antigos noticiando os achados 
            arqueológicos de Nathan Drake e consoles PlayStation 3 abandonados com cópias físicas de games antigos da Naughty Dog. [1]
            </h4>
        ";
    break;

    case 'contato':
        echo "
            <h2>Além dos Jogos</h2>
            <h4>O Sucesso Histórico na TV (HBO e Max): Estreando em janeiro de 2023, a adaptação oficial em formato de série
            live-action produzida pela HBO tornou-se um fenômeno de público e crítica global. Estrelada por Pedro Pascal (Joel)
            e Bella Ramsey (Ellie), a produção foi comandada por Craig Mazin (criador de Chernobyl) ao lado de Neil Druckmann.
            A segunda temporada da série foi exibida entre abril e maio de 2025, adaptando os arcos complexos da Parte II do 
            game e atraindo audiências massivas que ultrapassaram a marca de 3,7 milhões de espectadores simultâneos por episódio 
            nos Estados Unidos.
            </h4>

            <h4>A Identidade Musical de Gustavo Santaolalla: O renomado compositor argentino, vencedor de dois prêmios Oscar,
            foi convidado para compor a trilha oficial. Santaolalla evitou grandes orquestras tradicionais e focou no minimalismo
            melancólico, utilizando o ronroco (um instrumento de cordas sul-americano da família do charango)
            e violões acústicos destorcidos. A música instrumental tornou-se um pilar inseparável da identidade dramática da marca.
            </h4>

            <h4>Narrativa Expandida em Quadrinhos: O cânone oficial da franquia foi expandido para a literatura gráfica com a minissérie
            de histórias em quadrinhos The Last of Us: American Dreams, publicada pela editora Dark Horse. Co-escrita por Druckmann
            e pela quadrinista Faith Erin Hicks, a HQ serve como prelúdio direto para o jogo de 2013, detalhando o primeiro encontro
            entre Ellie e sua melhor amiga Riley dentro da escola militar.
            </h4>

            <h4>Fenômeno Comercial de Vendas e Impacto: A franquia consolidou-se como uma das marcas mais lucrativas do entretenimento,
            superando a impressionante marca de 1 bilhão de dólares em receita global. Juntos, os títulos de videogame acumulam mais
            de 37 milhões de cópias comercializadas ao redor do mundo, impulsionados fortemente pelo lançamento estratégico de
            The Last of Us Part II Remastered para PS5, que registrou mais de 2 milhões de unidades adicionais vendidas apenas 
            durante o período de exibição da segunda temporada da série na TV. [1, 2, 3, 4, 5, 6, 7]
            </h4>

            <img src='img/imagem.jpg' class='img-baixo'>            
        ";
    break;

    default:
        echo "<h2>Página não encontrada</h2>";
}

?>

</main>

</body>
</html>