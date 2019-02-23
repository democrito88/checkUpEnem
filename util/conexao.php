<?php

function conecta(){
    $conn = mysqli_connect("localhost", "root", "", "checkup_enem");

    if ($conn->connect_error) {
        die("Falaha na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    return $conn;
}

function desconecta($conn){
    mysqli_close($conn);
}
 
