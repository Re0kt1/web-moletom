<?php
require_once '../Php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sobre Nós 🧥</title>

    <link rel="stylesheet" href="../Css/StylesS.css">
</head>

<body>
    
    <header>
        <ul id="ul">
            <li class="active"><a href="../Html/Home.php">Inicio</a></li>
            <li><a href="../Html/Produtos.php">Produtos</a></li>
            <li><a href="../Html/Sobre.php">Sobre</a></li>
            <li class="login-button"><a href="../Html/Entrar.php" id="login">Entrar</a></li>
        </ul>

        <div class="searchbar-container">
            <input id="search-input" type="search" placeholder="Pesquise..." />
            
            <button id="search-button" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </header>

    <div class="FocoHome">
        <h1 id="lorem">
           Sobre nós
        </h1>

        <div class="imgs">
            <div class="Pessoa">
                <div class="conteudo">
                    <img class="ImgP" src="../Rsc/avatar.webp" alt="Symohn">
                    <div class="Descricao">
                        <h4>Symohn Judah</h4>
                        <p>Aluno de ciências da computação. Atualmente no segundo semestre.</p>
                    </div>
                </div>
            </div>
            <div class="Pessoa">
                <div class="conteudo">
                    <img class="ImgP" src="../Rsc/avatar.webp" alt="Renan">
                    <div class="Descricao">
                        <h4>Lucas fagundes</h4>
                        <p>Aluno de Análise e desenvolvimento de sistemas. Atualmente no primeiro período.</p>
                    </div>
                </div>
            </div>
            <div class="Pessoa">
                <div class="conteudo">
                    <img class="ImgP" src="../Rsc/avatar.webp" alt="ImgP Branco">
                    <div class="Descricao">
                        <h4>Renan silva</h4>
                        <p>Aluno de Análise e desenvolvimento de sistemas. Atualmento no primeiro período.</p>
                    </div>
                </div>
            </div>
            <div class="Pessoa">
                <div class="conteudo">
                    <img class="ImgP" src="../Rsc/avatar.webp" alt="ImgP Branco">
                    <div class="Descricao">
                        <h4>Aguinaldo santos junior</h4>
                        <p>Aluno de Análise e desenvolvimento de Sistemas. Atualmente no primeiro período.</p>
                    </div>
                </div>
            </div>
            <div class="Pessoa">
                <div class="conteudo">
                    <img class="ImgP" src="../Rsc/avatar.webp" alt="ImgP Branco">
                    <div class="Descricao">
                        <h4>Yagor carvalho</h4>
                        <p>Aluno de Gestão em T.I. Atualmente no primero período.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
        <p><a href="#">Footer.</a></p>
        <p><a href="#">Teste.</a></p>
        <p><a href="#">Sobre.</a></p>
        </footer>
    </div>
    <script src="../JS/All.js">
    </script>
</body>
</html>