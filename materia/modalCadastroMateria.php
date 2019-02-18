<?php
include_once '../util/selects.php';

echo "
<form action=\"cadastroMateria.php\" method=\"POST\">
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" required>
    <label>Área</label>
    ".selectArea()."
</form>";