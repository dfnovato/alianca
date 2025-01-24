<?php

include 'conexao.php';

$cd_classe = $_POST['cd_classe'];
$ds_classe = $_POST['ds_classe'];
$classe_life = $_POST['classe_life'];
$cres_life = $_POST['cres_life'];
$classe_mana = $_POST['classe_mana'];
$cres_mana = $_POST['cres_mana'];
$class_res_for = $_POST['class_res_for'];
$class_res_dex = $_POST['class_res_dex'];
$class_res_int = $_POST['class_res_int'];
$classe_for = $_POST['classe_for'];
$cres_for = $_POST['cres_for'];
$classe_dex = $_POST['classe_dex'];
$cres_dex = $_POST['cres_dex'];
$cres_int = $_POST['cres_int'];
$classe_int = $_POST['classe_int'];

$nm_vantagem = $_POST['nm_vantagem'];
$ds_vantagem = $_POST['ds_vantagem'];
$cd_vantagem = $_POST['cd_vantagem'];

$nm_desvantagem = $_POST['nm_desvantagem'];
$ds_desvantagem = $_POST['ds_desvantagem'];
$cd_desvantagem = $_POST['cd_desvantagem'];

try {
    $cn->beginTransaction();

    $atualiza = $cn->prepare("UPDATE tbl_classe SET ds_classe=:ds_classe, classe_life=:classe_life, cres_life=:cres_life, classe_mana=:classe_mana, cres_mana=:cres_mana, 
    class_res_for=:class_res_for, class_res_dex=:class_res_dex, class_res_int=:class_res_int, classe_for=:classe_for, cres_for=:cres_for, classe_dex=:classe_dex, cres_dex=:cres_dex, 
    cres_int=:cres_int, classe_int=:classe_int WHERE cd_classe=:cd_classe");

    $atualiza->bindParam(':ds_classe', $ds_classe);
    $atualiza->bindParam(':classe_life', $classe_life);
    $atualiza->bindParam(':cres_life', $cres_life);
    $atualiza->bindParam(':classe_mana', $classe_mana);
    $atualiza->bindParam(':cres_mana', $cres_mana);
    $atualiza->bindParam(':class_res_for', $class_res_for);
    $atualiza->bindParam(':class_res_dex', $class_res_dex);
    $atualiza->bindParam(':class_res_int', $class_res_int);
    $atualiza->bindParam(':cd_classe', $cd_classe);
    $atualiza->bindParam(':classe_for', $classe_for);
    $atualiza->bindParam(':cres_for', $cres_for);
    $atualiza->bindParam(':classe_dex', $classe_dex);
    $atualiza->bindParam(':cres_dex', $cres_dex);
    $atualiza->bindParam(':cres_int', $cres_int);
    $atualiza->bindParam(':classe_int', $classe_int);

    $atualiza->execute();

    $atualiza2 = $cn->prepare("UPDATE tbl_vantagens SET nm_vantagem=:nm_vantagem, ds_vantagem=:ds_vantagem WHERE cd_vantagem=:cd_vantagem");

    foreach ($cd_vantagem as $index => $id) {
        $atualiza2->bindParam(':nm_vantagem', $nm_vantagem[$index]);
        $atualiza2->bindParam(':ds_vantagem', $ds_vantagem[$index]);
        $atualiza2->bindParam(':cd_vantagem', $id);

        $atualiza2->execute();
    }

    $atualiza3 = $cn->prepare("UPDATE tbl_desvantagens SET nm_desvantagem=:nm_desvantagem, ds_desvantagem=:ds_desvantagem WHERE cd_desvantagem=:cd_desvantagem");

    foreach ($cd_desvantagem as $index => $id) {
        $atualiza3->bindParam(':nm_desvantagem', $nm_desvantagem[$index]);
        $atualiza3->bindParam(':ds_desvantagem', $ds_desvantagem[$index]);
        $atualiza3->bindParam(':cd_desvantagem', $id);

        $atualiza3->execute();
    }

    $cn->commit();
    header("Location: modalclass.php?cd=$cd_classe");
} catch (Exception $e) {
    $cn->rollBack();
    echo "Erro ao atualizar os dados: " . $e->getMessage();
}
?>