<?php
include_once '../util/conexao.php';

if($_SERVER['REQUEST_METHOD'] == "POST" && !antiInjection($_POST)){
    $acertos = $_POST['acertos'];
    $idAssunto = $_POST['idAssunto'];
    $conn = conecta();
    $queryInsereHistorico = "INSERT INTO historico(`data_mod`, `acertos`) VALUES (NOW(), ".$acertos.")";
    mysqli_query($conn, $queryInsereHistorico);
    
    $querySelectHistorico = "SELECT MAX(id) FROM historico";
    $resultados = mysqli_query($conn, $querySelectHistorico);
    while($resultado = mysqli_fetch_assoc($resultados)){
        $idHistorico = $resultado['id'];
    }
    
    $queryInsereAssuntoHistorico = "INSERT INTO assunto_historico(`idAssunto`,`idHistorico`) VALUES ( ".$idAssunto.", ".$idHistorico.")";
    mysqli_query($conn, $queryInsereAssuntoHistorico);
    desconecta($conn);
}else{
    header("Location: ../index.php");
}