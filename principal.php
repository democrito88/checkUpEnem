<?php
include_once './util/corpo.php';
include_once './util/conexao.php';
cabecalho();
?>
<div id="modalFundo" class="modal">
    <a class="fechaModal" onclick="fechaModal();"><i class="glyphicon glyphicon-remove"></i></a>
    <div class="panel painel-modal">
        <div class="panel-header painel-roxo-header"></div>
        <div class="panel-body"></div>
        <div class="panel-body painel-roxo-footer"></div>
    </div>
</div>
<section class="sessao-principal">
    <div class="col-md-4">
        <h3>Áreas</h3>
        <hr><br>
        <?php
            $queryListaAreas = "SELECT * FROM area ORDER BY nome";
            $conn = conecta();
            $areas = mysqli_query($conn, $queryListaAreas);
            if(mysqli_num_rows($areas) > 0){
                echo "<ul>";
                while($area = mysqli_fetch_assoc($areas)){
                    echo "<li><a href=\"area/conteudoArea.php?id=".$area['id']."\">".utf8_encode($area['nome'])."</a>&nbsp;&nbsp;<i class=\"glyphicon glyphicon-edit\" onclick=\"mostraModal(2, ".$area['id'].")\"></i></li>";
                }
                echo "</ul><br>";
            }else{
                echo "<p>Não foi registrada nenhuma área ainda</p>";
            }
            
        ?>
        <button onclick="mostraModal(1, null);" class="btn btn-default">Adicionar nova</button>
    </div>
    <div class="col-md-4">
        <h3>Matérias</h3>
        <hr><br>
        <?php
            $queryListaMateria = "SELECT * FROM materia ORDER BY nome";
            $materias = mysqli_query($conn, $queryListaMateria);
            desconecta($conn);
            if(mysqli_num_rows($materias) > 0){
                echo "<ul>";
                while($materia = mysqli_fetch_assoc($materias)){
                    echo "<li>".utf8_encode($materia['nome'])."&nbsp;&nbsp;<i class=\"glyphicon glyphicon-edit\" onclick=\"mostraModal(4, ".$materia['id'].")\"></i></li>";
                }
                echo "</ul><br>";
            }else{
                echo "<p>Não foi registrada nenhuma matéria ainda</p>";
            }
            
        ?>
        <button onclick="mostraModal(3, null);" class="btn btn-default">Adicionar nova</button>
    </div>
</section>
<?php
rodape();
?>