<?php
include_once '../util/corpo.php';

cabecalho();
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $queryBuscaArea = "SELECT id, nome FROM area WHERE id = ".$_GET['id'];
    $queryBuscaMateria = "SELECT id, nome FROM materia WHERE idArea = ".$_GET['id'];
    
    $conn = conecta();
    $resultados = mysqli_query($conn, $queryBuscaArea);
    while($resultado = mysqli_fetch_assoc($resultados)){
        $nomeArea = $resultado['nome'];
        $id = $resultado['id'];
    }
?>
<div id="modalFundo" class="modal">
    <a class="fechaModal" onclick="fechaModal();"><i class="glyphicon glyphicon-remove"></i></a>
    <div class="panel painel-modal">
        <div class="panel-header painel-roxo-header"></div>
        <div class="panel-body"></div>
        <div class="panel-body painel-roxo-footer"></div>
    </div>
</div>
<section class="conteudo">
    <h2><?php echo utf8_encode($nomeArea);?></h2><br>
    <h4 onclick="mostraModal(2, <?php echo $id;?>)">Editar nome</h4><br>
    <div>
        <h5>Matérias associadas</h5>
        <hr>
        <ul>
        <?php
            $materias = mysqli_query($conn, $queryBuscaMateria);
            if(mysqli_num_rows($materias) > 0){
                while($materia = mysqli_fetch_assoc($materias)){
                    echo "<li><a style=\"color: white;\" href=\"../materia/conteudoMateria.php?id=".$materia['id']."\">".utf8_encode($materia['nome'])."</a></li>";
                }
            }
        ?>
        </ul>
    </div>
</section>
<?php
desconecta($conn);
}
rodape();
