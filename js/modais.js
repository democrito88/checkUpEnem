function fechaModal(){
    document.getElementsByClassName("panel-body")[0].innerHTML = "";
    document.getElementById("modalFundo").style.display = "none";
}

function mostraModal(indice, id){
    var endereco = "";
    switch(indice){
        case 1:
            endereco = "area/modalCadastroArea.php";
            break;
        case 2:
            endereco = "area/modalEditaArea.php?id="+id;
            break;
        case 3:
            endereco = "materia/modalCadastroMateria.php";
            break;
        case 4:
            endereco = "materia/modalEditaMateria.php?id="+id;
            break;
    }
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("modalFundo").style.display = "block";
            document.getElementsByClassName("panel-body")[0].innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "" + endereco, true);
    xmlhttp.send();
}
