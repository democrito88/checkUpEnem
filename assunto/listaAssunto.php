<?php
include_once '../util/conexao.php';
include_once '../util/validar.php';
include_once '../util/corpo.php';
cabecalho();

$queryListaAssuntos = "SELECT a.nome, h.acertos"
        . " FROM assunto a"
        . " LEFT JOIN assunto_historico ah ON ah.idAssunto = a.id"
        . " LEFT JOIN historico h ON h.id = ah.idHistorico"
        . " WHERE m.idMateria = ".$_GET['id'].";";
$conn = conecta();
$assuntos = mysqli_query($conn, $queryListaAssuntos);
$noeMAteria = mysqli_query($conn, "SELECT nome FROM materia WHERE id = ".$_GET['id']);
desconecta($conn);

?>
<section>
    <h2><?php echo mysqli_?></h2>
</section>
<?php
rodape();
?>
