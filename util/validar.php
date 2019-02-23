<?php
include_once 'conexao.php';

function antiInjection($string){
    $lista = array("<script>",";","SELECT", "DROP", "DELETE", "ALTER", "SHOW", "UPDATE", "INSERT");
    $flag = false;
    
    if(is_array($string)){
        $tam = $string->lenght;
        for($i=0; $i < $tam; $i++){
            for($j = 0; $j < 9; $j++){
                if(strpos($string[i], $lista[$j]) != FALSE){
                    $flag = true;
                }
            }
        }
        
    }else{
        for($i = 0; $i < 9; $i++){
            if(strpos($string, $lista[$i]) != FALSE){
                $flag = true;
            }
        }
    }
    
    return $flag;
}

function sessao(){
    if(is_null(session_id())){
        header("Location: index.php");
    }
    session_start();
}