<?php
include_once './util/corpo.php';
cabecalho();
?>
<section>
    <div>
        <h3>Área</h3>
        <?php
            $queryListaAreas = "SELECT * FROM area ORDEM BY nome";
            $conn = conecta();
            $areas = mysqli_query($conn, $queryListaAreas);
            echo "<ul>";
            while($area = mysqli_fetch_assoc($areas)){
                echo "<li>".$area['nome']."</li>";
            }
            echo "</ul>";
        ?>
        <button onclick="modalArea();">Adicionar nova</button>
    </div>
    <div>
        <h3>Matéria</h3>
        <?php
            $queryListaMateria = "SELECT * FROM materia ORDEM BY nome";
            $materias = mysqli_query($conn, $queryListaAreas);
            desconecta($conn);
            echo "<ul>";
            while($materia = mysqli_fetch_assoc($materias)){
                echo "<li>".$materia['nome']."</li>";
            }
            echo "</ul>";
        ?>
        <button onclick="modalMateria();">Adicionar nova</button>
    </div>
</section>
<?php
rodape();
?>