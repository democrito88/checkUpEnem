<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!antiInjection($_POST['nome'])){
        $nome = $_POST['nome'];
        $query = "INSERT INTO `assunto` (`nome`) VALUES ".$nome;

        $conn = conecta();
        $sql = mysqli_query($conn, $query);
        desconecta($conn);

        header("Location: ../principal.php");
    }else{
        header("Location: ../principal.php");
    }
    
}