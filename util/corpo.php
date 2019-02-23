<?php
include_once 'conexao.php';
include_once 'validar.php';

function cabecalho(){
    
sessao();
echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\"/>
        <link rel=\"stylesheet\" href=\"css/style.css\"/>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header class=\"cabecalho\">
            <h1>Check-up do ENEM</h1>
            <h4>Bem vinda, ".utf8_encode($_SESSION['nome'])." </h4>
        </header>
        ";
}

function rodape(){
    echo "<footer class=\"rodape\">
            <p>Check-up ENEM - Sistema de avaliação e acompanhamento de assuntos. Versão 1.0</p>
        </footer>
    </body>
</html>";
}
