<?php
include_once '../util/conexao.php';
include_once '../util/selects.php';

$conn = conecta();
$sql = mysqli_query($conn, "SELECT `nome`, `idArea` FROM materia WHERE id = ".$_POST['id']);
if($sql){
    while($resultado = mysqli_fetch_assoc($sql)){
        $nome = $resultado['nome'];
        $id = $resultado['id'];
    }
}

desconecta($conn);

echo "
<form action=\"alteraMAteria.php\" method=\"POST\">
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" value=\"".$nome."\">
    <label>Area</label>
    ".selectArea($id)."
    <button class=\"btn btn-sucess\">Cadastrar</button>
</form>
";