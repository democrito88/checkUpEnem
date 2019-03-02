<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <title>Check-up ENEM</title>
    </head>
    <body>
        <section class="sessao-login">
            <div class="panel painel-verde">
                <div class="panel-header painel-verde-header">
                    <h3>Bem vindo(a) ao check-up ENEM!</h3>
                </div>
                <div class="panel-body">
                    <form action="util/validarLogin.php" method="POST">
                        <label>login</label>&nbsp;&nbsp;
                        <input type="text" name="login" required><br><br>
                        <label>senha</label>
                        <input type="password" name="senha" required><br><br>
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>
                </div>
                <div class="panel-footer painel-verde-footer"></div>
            </div>
        </section>
    </body>
</html>
