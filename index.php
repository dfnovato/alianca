<head>
    <link rel="stylesheet" href="./css/nav.css"/>
    <link rel="stylesheet" href="/css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body class="cor1">

<?php
session_start();
include 'conexao.php';


$offset = isset($_POST['offset']) ? (int) $_POST['offset'] : 0;
$limite = 8; // manter o offset na mesma quantidade abaixo


$consulta = $cn->prepare('SELECT * FROM tbl_classe ORDER BY tipo_classe LIMIT :offset, :limite');
$consulta->bindValue(':offset', $offset, PDO::PARAM_INT);
$consulta->bindValue(':limite', $limite, PDO::PARAM_INT);
$consulta->execute();
?>

<?php include 'nav.php' ?>   

<main>
    <div class="container" id="post-container">
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
            extract($exibe);
        ?>

        <a href="modalclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="divlv1 link1 <?php echo "link". $exibe['tipo_classe']; ?>">
            <div>
                <img class="foto" src="./img/<?php echo $img_classe ?>" alt="">
                <div class="textinho">
                    <h2><?php echo $nm_classe ?></h2>
                    <p><?php echo $exibe['ds_classe']; ?></p>
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
        let offset = 8; // manter o offset igual ao de cima
        let carregando = false;

        
        $(window).scroll(function () {
            if (!carregando && $(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                carregando = true;
                $("#loading-message").show(); 

                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: { offset: offset },
                    success: function (data) {
                        let newItems = $(data).find('#post-container').html(); 
                        if ($.trim(newItems) !== "") {
                            $("#post-container").append(newItems); 
                            offset += 6; 
                            $("#loading-message").hide();
                        } else {
                            $("#loading-message").text("Não há mais conteúdos para carregar.").show();
                        }
                        carregando = false;
                    },
                    error: function () {
                        $("#loading-message").text("Erro ao carregar mais conteúdos.").show();
                        carregando = false;
                    }
                });
            }
        });
    });
</script>

</body>
