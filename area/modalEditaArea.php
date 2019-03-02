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
<form action=\"area/alteraArea.php\" method=\"POST\">
    <h4>Edite uma área</h4><br>
    <label>Nome</label>
    <input type=\"text\" name=\"nome\" value=\"".$nome."\"><br><br>
    <button class=\"btn btn-sucess\">Editar</button>
</form>
";