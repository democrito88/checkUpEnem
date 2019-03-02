<?php
include_once '../util/selects.php';

echo "
<form action=\"materia/cadastroMateria.php\" method=\"POST\">
    <h4>Cadastre uma nova matéria</h4><br>
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" required><br><br>
    <label>Área</label>
    ".selectArea()."<br><br>
    <button class=\"btn btn-success\">Cadastrar</button>
</form>";