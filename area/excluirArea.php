<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!antiInjection($_POST)){
        $id = $_POST['id'];
        $queryBuscaMateria = "SELECT id FROM materia WHERE idArea = ".$id;
        $queryBuscaAssunto = "SELECT id FROM assunto WHERE idMateria = ";
        $queryBuscaAssuntoHistorico = "SELECT id FROM assunto_historico WHERE idAssunto = ";
        $queryBuscaHistorico = "SELECT id FROM historico WHERE  id = ";
        $queryExcluiHistorico = "DELETE FROM `historico` WHERE `id` = ";
        $queryExcluiAssuntoHistorico = "DELETE FROM `assunto_historico` WHERE `id` = ";
        $queryExcluiAssunto = "DELETE FROM `assunto` WHERE `id` = ";
        $queryExcluiMateria = "DELETE FROM `materia` WHERE `id` = ";
        $queryExcluiArea = "DELETE FROM `area` WHERE `id` = ".$id;

        $conn = conecta();
        $materias = mysqli_query($conn, $queryBuscaMateria);
        while($materia = mysqli_fetch_assoc($materias)){
            $assuntos = mysqli_query($conn, $queryBuscaAssunto.$materia['id']);
            while($assunto = mysqli_fetch_assoc($assuntos)){
                $assuntos_historicos = mysqli_query($conn, $queryBuscaAssuntoHistorico.$assunto['id']);
                while($assunto_historico = mysqli_fetch_assoc($assuntos_historicos)){
                    $historicos = mysqli_query($conn, $queryBuscaHistorico.$assunto_historico['idHistorico']);
                    while($historico = mysqli_fetch_assoc($historicos)){
                        mysqli_query($conn, $queryExcluiHistorico.$historico['id']);
                    }
                    mysqli_query($conn, $queryExcluiAssuntoHistorico.$assunto_historico['id']);
                }
                mysqli_query($conn, $queryExcluiAssunto.$assunto['id']);
            }
            mysqli_query($conn, $queryExcluiMateria.$materia['id']);
        }
        
        mysqli_query($conn, $queryExcluiArea);
        
        desconecta($conn);

        header("Location: ../principal.php");
    }else{
        header("Location: ../principal.php");
    }
    
}