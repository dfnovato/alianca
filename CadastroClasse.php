<?php
include 'conexao.php';

$nm_classe = $_POST['txtnome'];
$tp_classe = $_POST['tipoclasse'];
$ds_classe = $_POST['txtdescricao'];
$for_classe = $_POST['forclasse'];
$dex_classe = $_POST['dexclasse'];
$int_classe = $_POST['intclasse'];
$life_classe = $_POST['lifeclasse'];
$mana_classe = $_POST['manaclasse'];
$char_classe = $_POST['charclasse'];
$resfor_classe = $_POST['resforclasse'];
$resdex_classe = $_POST['resdexclasse'];
$resint_classe = $_POST['resintclasse'];
$cresfor_classe = $_POST['cresforclasse'];
$cresdex_classe = $_POST['cresdexclasse'];
$cresint_classe = $_POST['cresintclasse'];
$creslife_classe = $_POST['creslifeclasse'];
$cresmana_classe = $_POST['cresmanaclasse'];
$cdvan_classe = $_POST['cdvanclasse'];
$cddes_classe = $_POST['cddesclasse'];

$recebe_foto1 = $_FILES['txtfoto1'];
$destino = "C:/xampp/htdocs/img/";

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao);


$img_nome = md5(uniqid(time())).".".$extencao[1];

try {
	
	$inserir=$cn->query("INSERT INTO tbl_classe(nm_classe, tipo_classe, ds_classe, img_classe, classe_for, classe_dex, classe_int, classe_life, classe_mana, classe_char, class_res_for, class_res_dex, class_res_int, cres_for, cres_dex, cres_int, cres_life, cres_mana) VALUES ('$nm_classe', '$tp_classe', '$ds_classe', '$img_nome', '$for_classe', '$dex_classe', '$int_classe', '$life_classe', '$mana_classe', '$char_classe', '$resfor_classe', '$resdex_classe', '$resint_classe', '$cresfor_classe', '$cresdex_classe', '$cresint_classe', '$creslife_classe', '$cresmana_classe')");
	
 ini_set('display_errors', 0 );

 error_reporting(0);
 error_reporting(E_ERROR | E_WARNING | E_PARSE);	

	move_uploaded_file($recebe_foto1['tpm_name'], $destino.$img_nome);



	header('Location:index.php');


}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}

?>
