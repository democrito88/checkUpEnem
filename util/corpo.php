<?php
include_once './util/conexao.php';
include_once './util/validar.php';

function cabecalho(){
    
sessao();
echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"\">
        <script src=\"\"></script>
    </head>
    <body>
        <header>
            <h1>Check-up do ENEM</h1>
            <h4>Bem vinda, ".$_SESSION['nome']." </h4>
        </header>
        ";
}

function rodape(){
    echo "<footer>
            <p>Sistema de avaliação e acompanhamento de assuntos. Versão 1.0</p>
        </footer>
    </body>
</html>";
}
