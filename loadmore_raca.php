<?php
session_start();
include 'conexao.php';

$offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
$limite = 8;

$consulta = $cn->prepare('SELECT * FROM tbl_raca ORDER BY nm_raca LIMIT :offset, :limite');
$consulta->bindValue(':offset', $offset, PDO::PARAM_INT);
$consulta->bindValue(':limite', $limite, PDO::PARAM_INT);
$consulta->execute();

while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
    <a href="modalraca.php?cd=<?php echo $exibe['cd_raca']; ?>" class="divlv1 link1">
        <div>
            <img class="foto" src="./img/racas/<?php echo htmlspecialchars($exibe['img_raca']); ?>" alt="">
            <div class="textinho">
                <h2><?php echo htmlspecialchars($exibe['nm_raca']); ?></h2>
                <p><?php echo htmlspecialchars($exibe['ds_raca']); ?></p>
            </div>
        </div>
    </a>
<?php } ?>