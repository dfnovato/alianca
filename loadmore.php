<?php
session_start();
include 'conexao.php';

$offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
$limite = 8;

$consulta = $cn->prepare('SELECT * FROM tbl_classe ORDER BY tipo_classe LIMIT :offset, :limite');
$consulta->bindValue(':offset', $offset, PDO::PARAM_INT);
$consulta->bindValue(':limite', $limite, PDO::PARAM_INT);
$consulta->execute();

while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
    // usamos a mesma estrutura e classes exatamente como estão no index.php
    ?>
    <a href="modalclass.php?cd=<?php echo $exibe['cd_classe']; ?>" 
       class="divlv1 link1 <?php echo "link" . htmlspecialchars($exibe['tipo_classe']); ?>">
        <div>
            <img class="foto" src="./img/<?php echo htmlspecialchars($exibe['img_classe']); ?>" alt="">
            <div class="textinho">
                <h2><?php echo htmlspecialchars($exibe['nm_classe']); ?></h2>
                <p><?php echo htmlspecialchars($exibe['ds_classe']); ?></p>
            </div>
        </div>
    </a>
<?php } ?>
