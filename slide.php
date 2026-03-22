<style>
#content-wrapper{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
#featured{
    object-fit: cover;
    border: 2px solid rgb(190, 190, 190);
    width: 100%; /* Garante visibilidade no grid */
    height: auto;
}
.thumbnail{
    object-fit: cover;
    max-width: 33%;
    max-height: 100px;
    cursor: pointer;
    opacity: 0.6; /* Deixa as inativas levemente foscas */
    margin: 5px;
    border: 2px solid rgb(190, 190, 190);
    transition: .3s;
}
.thumbnail:hover, .thumbnail.active {
    opacity: 1;
    border: 2px solid #ffd700; /* Destaque para a selecionada */
}
#slide-wrapper{
    max-width: 100%;
    display: flex;
    min-height: 100%;
    align-items: center;
}
#slider{
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
}
#slider::-webkit-scrollbar {
    display: none;
}
.arrow{
    width: 30px;
    height: 30px;
    cursor: pointer;
    transition: .3s;
}
.arrow:hover{
    opacity: .5;
}
</style>    

<?php
include 'conexao.php';

// 1. Buscamos a primeira imagem para carregar no 'featured' imediatamente
$consPrimeira = $cn->query("SELECT img_classe FROM tbl_imgclasse WHERE cd_classe='$cd_classe' ORDER BY img_classe LIMIT 1");
$dadosPrimeira = $consPrimeira->fetch(PDO::FETCH_ASSOC);

// Se não houver imagem na tabela de extras, usamos uma padrão ou a que estiver na tabela de classe
$img_inicial = $dadosPrimeira ? $dadosPrimeira['img_classe'] : 'default.png'; 
?>

<img class="foto2" id="featured" src="./img/<?php echo $img_inicial; ?>">

<div id="content-wrapper">
    <div class="column">
        <div id="slide-wrapper">
            <img id="slideLeft" class="arrow" src="./img/icon/arrow-left.png">
            
            <div id="slider">
                <?php
                // 2. Consulta para as miniaturas (Thumbnails)
                // Usamos $consS (consulta slide) para não conflitar com nada
                $consS = $cn->query("SELECT * FROM tbl_imgclasse WHERE cd_classe='$cd_classe' ORDER BY img_classe");
                
                while($img_row = $consS->fetch(PDO::FETCH_ASSOC)) { ?>
                    <img class="thumbnail" src="./img/<?php echo $img_row['img_classe']?>">
                <?php } ?>   
            </div>

            <img id="slideRight" class="arrow" src="./img/icon/arrow-right.png">
        </div>
    </div>
</div>

<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail');
    let featured = document.getElementById('featured');

    // Inicializa a primeira thumbnail como ativa visualmente
    if(thumbnails.length > 0) {
        thumbnails[0].classList.add('active');
    }

    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener('mouseover', function() {
            // Remove a classe active de todas antes de adicionar na atual
            for (var j = 0; j < thumbnails.length; j++) {
                thumbnails[j].classList.remove('active');
            }

            this.classList.add('active');
            featured.src = this.src; // Troca a imagem principal
        });
    }

    // Controles de scroll do slider
    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function() {
        document.getElementById('slider').scrollLeft -= 180;
    });

    buttonRight.addEventListener('click', function() {
        document.getElementById('slider').scrollLeft += 180;
    });
</script>