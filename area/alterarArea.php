<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!antiInjection($_POST)){
        $nome = $_POST['nome'];
        $id = $_POST['id'];
        $query = "UPDATE `area` SET `nome`= '".$nome."' WHERE `id` = ".$id;

        $conn = conecta();
        $sql = mysqli_query($conn, $query);
        desconecta($conn);

        header("Location: ../principal.php");
    }else{
        header("Location: ../principal.php");
    }
    
}
