<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!antiInjection($_POST)){
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idArea = $_POST['idArea'];
        $query = "UPDATE `materia` SET nome`= '".$nome."',`idArea`= '".$idArea."' WHERE `id` = ".$id;

        $conn = conecta();
        $sql = mysqli_query($conn, $query);
        desconecta($conn);

        header("Location: ../principal.php");
    }else{
        header("Location: ../principal.php");
    }
    
}