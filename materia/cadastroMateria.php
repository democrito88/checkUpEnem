<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!antiInjection($_POST['nome'])){
        $nome = $_POST['nome'];
        $idArea = $_POST['idArea'];
        $query = "INSERT INTO `materia` (`nome`, `idArea`) VALUES '".$nome."', ".$idArea;

        $conn = conecta();
        $sql = mysqli_query($conn, $query);
        desconecta($conn);

        header("Location: ../principal.php");
    }else{
        header("Location: ../principal.php");
    }
    
}