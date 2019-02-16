<?php
include_once '../util/conexao.php';

$conn = conecta();
$sql = mysqli_query($conn, "SELECT `nome` FROM area WHERE id = '".$_GET['id']."'");
if($sql){
    while($resultado = mysqli_fetch_assoc($sql)){
        $nome = $resultado['nome'];
    }
}

desconecta($conn);

echo "
<form action=\"alterarArea.php\" method=\"POST\">
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" value=\"".$nome."\">
    <button class=\"btn btn-sucess\">Cadastrar</button>
</form>
";