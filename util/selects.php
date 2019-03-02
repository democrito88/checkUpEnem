<?php
include_once 'conexao.php';

function selectArea($id = null){
    $conn = conecta();
    $query = "SELECT * FROM area";
    $sql = mysqli_query($conn, $query);
    
    $resposta = "<select name=\"idArea\" required>";
    if($sql){
        while($area = mysqli_fetch_assoc($sql)){
            $resposta .= "<option value=\"".$area['id']."\""
                    . (!is_null($id) && $id == $area['id']? "selected" : "")
                    . ">"
                    .utf8_encode($area['nome'])."</option>";
        }
    }
    $resposta .= "</select>";
    
    return $resposta;
}

function selectMateria($id = null){
    $conn = conecta();
    $query = "SELECT id, nome FROM materia";
    $sql = mysqli_query($conn, $query);
    
    $resposta = "<select name=\"idMateria\" required>";
    if(!$sql){
        while($materia = mysqli_fetch_assoc($sql)){
            $resposta .= "<option value=\"".$materia['id']."\""
                    . !is_null($id) && $id = $materia['id']? "selected" : ""
                    . ">".$materia['nome']."</option>";
        }
    }
    $resposta .= "</select>";
    
    return $resposta;
}