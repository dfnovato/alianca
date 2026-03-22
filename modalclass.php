<?php
session_start();
include 'conexao.php';


$cd_classe = isset($_GET['cd']) ? $_GET['cd'] : 0;

# corrigido o problema de SQL Injection usando prepared statements
# corrigido o problema de XSS usando htmlspecialchars na saída
# corrigido o problema de sobrecarga da variavel $exibe usando $classe para os dados da classe e $dadosPrimeira para a imagem
$consultaClasse = $cn->query("SELECT * FROM tbl_classe WHERE cd_classe='$cd_classe'");
$classe = $consultaClasse->fetch(PDO::FETCH_ASSOC);

if (!$classe) {
    die("Classe não encontrada.");
}

$corClasse = "";
switch($classe['tipo_classe']) {
    case "1": $corClasse = "corn1"; break; 
    case "2": $corClasse = "corn2"; break; 
    case "3": $corClasse = "corn3"; break; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css"/>
    <link rel="stylesheet" href="./css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body class="modalbody">
<?php include 'nav.php' ?>   

<main>
<div class="modalcontainer">
    <div class="divlv2 <?php echo $corClasse; ?>">
        <div class="grid">
            <div class="item item-1">
                <div class="titulo2 fonterpg"><?php echo $classe['nm_classe']?></div> 
                <p><?php echo $classe['ds_classe']; ?></p>
                <?php include 'slide.php' ?>
            </div>
        </div>
    </div>

    <div class="divlv2 <?php echo $corClasse; ?>">
        <div class="grid">
            <div class="item item-3 gridiv fonterpg titulo2">
                <div class="item item-0">
                    <div><img src="./img/icon/vida.png" class="img3"></div>
                    <div class="fonterpg "><?php echo $classe['classe_life']?>+<?php echo $classe['cres_life']?></div>
                    <br>
                    <div><img src="./img/icon/mana.png" class="img3"></div>
                    <div class="fonterpg "><?php echo $classe['classe_mana']?>+<?php echo $classe['cres_mana']?></div>
                </div>

                <div class="grid titulo2">
                    <caption>Resistencia</caption>
                    <table>
                        <tr><th>Status</th><th>Base</th></tr>
                        <tr>
                            <td><img src="./img/icon/shield.png" class="img2"></td> 
                            <td><?php echo $classe['class_res_for'] ?></td>
                        </tr>
                        <tr> 
                            <td><img src="./img/icon/potion.png" class="img2"></td> 
                            <td><?php echo $classe['class_res_dex'] ?></td>
                        </tr>
                        <tr>
                            <td><img src="./img/icon/crystal.png" class="img2"></td> 
                            <td><?php echo $classe['class_res_int'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="item item-4 fonterpg">
                <div class="gridiv titulo2">
                    <caption>Status</caption>
                    <table>
                        <tr>
                            <th>Status</th><th>Base</th><th>Up+</th><th>5 Nv</th><th>10 Nv</th>
                        </tr>
                        <tr>
                            <td><img src="./img/icon/sword.png" class="img2"></td> 
                            <td><?php echo $classe['classe_for'] ?></td>
                            <td>+<?php echo $classe['cres_for'] ?></td>
                            <td><?php echo $classe['classe_for'] + ($classe['cres_for']*4); ?></td>
                            <td><?php echo $classe['classe_for'] + ($classe['cres_for']*9); ?></td>
                        </tr>
                        <tr> 
                            <td><img src="./img/icon/bow.png" class="img2"></td> 
                            <td><?php echo $classe['classe_dex'] ?></td>
                            <td>+<?php echo $classe['cres_dex'] ?></td>
                            <td><?php echo $classe['classe_dex'] + ($classe['cres_dex']*4); ?></td>
                            <td><?php echo $classe['classe_dex'] + ($classe['cres_dex']*9); ?></td>
                        </tr>
                        <tr>
                            <td><img src="./img/icon/magic.png" class="img2"></td> 
                            <td><?php echo $classe['classe_int'] ?></td>
                            <td>+<?php echo $classe['cres_int'] ?></td>
                            <td><?php echo $classe['classe_int'] + ($classe['cres_int']*4); ?></td>
                            <td><?php echo $classe['classe_int'] + ($classe['cres_int']*9); ?></td>
                        </tr>
                    </table>
                </div>  
            </div>

            <div class="item item-5"><div class="titulo2 fonterpg">Vantanges</div> 
                <table>
                    <tr><th>Vantagem</th><th>Descrição</th></tr>
                    <?php 
                    $consV = $cn->query("SELECT * FROM vw_vantagens WHERE cd_classe='$cd_classe'");
                    while($v = $consV->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr> 
                            <td><?php echo $v['nm_vantagem']; ?></td>
                            <td><?php echo $v['ds_vantagem']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="item item-6"><div class="titulo2 fonterpg">Desvantagens</div> 
                <table>
                    <tr><th>Vantagem</th><th>Descrição</th></tr>
                    <?php 
                    $consD = $cn->query("SELECT * FROM vw_desvantages WHERE cd_classe='$cd_classe'");
                    while($d = $consD->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr> 
                            <td><?php echo $d['nm_desvantagem']; ?></td>
                            <td><?php echo $d['ds_desvantagem']; ?></td>
                        </tr>
                    <?php } ?>
                </table>   
            </div>
        </div>
    </div>

    <div class="divlv2 <?php echo $corClasse; ?>">
        <div class="item item-0"><div class="titulo2 fonterpg">Talentos de Classe</div> 
            <table style="width:100%">
                <tr>
                    <th style="width:10%">Nvl</th>
                    <th style="width:25%">Talento</th>
                    <th>Descrição</th>
                </tr>
                <?php 
                $consT = $cn->query("SELECT * FROM vw_talentos WHERE cd_classe='$cd_classe' ORDER BY lvl_talento ASC");
                while($t = $consT->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td style="text-align:center"><b><?php echo $t['lvl_talento']; ?></b></td>
                        <td style="font-size:14px"><b><?php echo $t['nm_talento']; ?></b></td>
                        <td style="font-size:12px"><?php echo $t['ds_talento']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</main>
</body>
</html>