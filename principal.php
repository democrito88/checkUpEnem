<?php
include_once './util/corpo.php';
include_once './util/conexao.php';
cabecalho();
?>
<div class="modal"></div>
<section class="sessao-principal">
    <div class="col-md-4">
        <h3>Área</h3>
        <?php
            $queryListaAreas = "SELECT * FROM area ORDER BY nome";
            $conn = conecta();
            $areas = mysqli_query($conn, $queryListaAreas);
            echo "<ul>";
            while($area = mysqli_fetch_assoc($areas)){
                echo "<li>".$area['nome']."</li>";
            }
            echo "</ul><br>";
        ?>
        <button onclick="modalArea();" class="btn btn-default">Adicionar nova</button>
    </div>
    <div class="col-md-4">
        <h3>Matéria</h3>
        <?php
            $queryListaMateria = "SELECT * FROM materia ORDER BY nome";
            $materias = mysqli_query($conn, $queryListaAreas);
            desconecta($conn);
            echo "<ul>";
            while($materia = mysqli_fetch_assoc($materias)){
                echo "<li>".$materia['nome']."</li>";
            }
            echo "</ul><br>";
        ?>
        <button onclick="modalMateria();" class="btn btn-default">Adicionar nova</button>
    </div>
</section>
<?php
rodape();
?>