<?php
include 'conexao.php';


$consulta = $cn->query('SELECT cd_classe FROM tbl_classe ORDER BY cd_classe');
$codigos_classes = $consulta->fetchAll(PDO::FETCH_COLUMN);

// Verifica se o código atual está no array
$current_cd_classe = $_GET['cd'];
$current_index = array_search($current_cd_classe, $codigos_classes);

// Verifica se o código atual está no array e se há um próximo código
if ($current_index !== false && isset($codigos_classes[$current_index + 1])) {
    $next_cd_classe = $codigos_classes[$current_index + 1];
    // Redireciona para a próxima classe
    header("Location: modalclass.php?cd=$next_cd_classe");
    exit();
} else {
    header("Location: modalclass.php?cd=2");
}

// Consulta para exibir a classe atual
$consulta = $cn->query("SELECT * FROM tbl_classe WHERE cd_classe='$current_cd_classe'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if ($exibe) {
    // Exibe os dados da classe atual
    echo "Classe: " . $exibe['cd_classe']; // Exemplo de exibição de dados
} else {
    echo "Classe não encontrada.";
}
?>
