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
<form action=\"materia/alteraMateria.php\" method=\"POST\">
    <h4>Edite uma matéria</h4><br>
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" value=\"".$nome."\"><br>
    <label>Área</label>
    ".selectArea($id)."<br><br>
    <button class=\"btn btn-sucess\">Editar</button>
</form>
";