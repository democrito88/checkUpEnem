<?php
include_once '../util/conexao.php';

if($_SERVER['REQUEST_METHOD'] == "POST" && !antiInjection($_POST)){
    $acertos = $_POST['acertos'];
    $idMateria = $_POST['idMateria'];
    $conn = conecta();
    $query = "INSERT INTO historico(`data_mod`, `acertos`) VALUES (NOW(), ".$acertos.")";
    mysqli_query($conn, $query);
    desconecta($conn);
}else{
    header("Location: ../index.php");
}