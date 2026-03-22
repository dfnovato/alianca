<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css"/>
    <link rel="stylesheet" href="./css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body class="cor1">

<?php
session_start();
include 'conexao.php';

$limite = 8;
$consulta = $cn->prepare('SELECT * FROM tbl_classe ORDER BY tipo_classe LIMIT :limite');
$consulta->bindValue(':limite', $limite, PDO::PARAM_INT);
$consulta->execute();
?>

<?php include 'nav.php' ?>   

<main>
    <div class="container" id="post-container">
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <a href="modalclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="divlv1 link1 <?php echo "link" . htmlspecialchars($exibe['tipo_classe']); ?>">
                <div>
                    <img class="foto" src="./img/<?php echo htmlspecialchars($exibe['img_classe']); ?>" alt="">
                    <div class="textinho">
                        <h2><?php echo htmlspecialchars($exibe['nm_classe']); ?></h2>
                        <p><?php echo htmlspecialchars($exibe['ds_classe']); ?></p>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>

    <div id="loading-message" style="display:none; text-align:center; margin:20px;">Carregando...</div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let offset = 8; // começa após os 8 primeiros
        let carregando = false;

        $(window).scroll(function () {
            if (!carregando && $(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                carregando = true;
                $("#loading-message").show();

                $.ajax({
                    url: "loadmore.php",
                    type: "POST",
                    data: { offset: offset },
                    success: function (data) {
                        if ($.trim(data) !== "") {
                            $("#post-container").append(data);
                            offset += 8;
                            $("#loading-message").hide();
                        } else {
                            $("#loading-message").text("Não há mais conteúdos para carregar.");
                        }
                        carregando = false;
                    },
                    error: function () {
                        $("#loading-message").text("Erro ao carregar mais conteúdos.");
                        carregando = false;
                    }
                });
            }
        });
    });
</script>

</body>
</html>