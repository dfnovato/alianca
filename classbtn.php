<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilos para o botão */
        .meu-botao {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        /* Estilos para o hover do botão */
        .meu-botao:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-width: 1198px) {
    .play {
        width: 230px;
        height: 137px;
        background: url(/img/btn-md-play.png) no-repeat 0 top;
    }
}


    </style>
</head>
<body>
<?php
$consulta = $cn->query('select*from tbl_classe');
$cd_classe = $_GET['cd'];
$consulta = $cn->query("select*from tbl_classe where cd_classe='$cd_classe'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

extract($exibe);
?>
    <!-- O botão -->
    <a href = "plusclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="meu-botao">proximo <?php echo $exibe['tipo_classe'] ?></a>
    <a href = "lessclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="meu-botao">anterior <?php echo $exibe['tipo_classe'] ?></a>
    <a href = "classe_editar_form.php?cd=<?php echo $exibe['cd_classe']; ?>" class="meu-botao">editar <?php echo $exibe['tipo_classe'] ?></a>
    <a class="play" href="#"></a>
    <img class="play" src="./img/btn-md-play.png">
</body>
</html>