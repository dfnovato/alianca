

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
}
.thumbnail{
	object-fit: cover;
	max-width: 33%;
	max-height: 100px;
	cursor: pointer;
	opacity:1;
	margin: 5px;
	border: 2px solid rgb(190, 190, 190);
}
.thumbnail:hover{
	opacity:1;
}
.active{
	opacity: 1;
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
	width: 30px;
	height: 30px;
}



</style>    


<?php
include 'conexao.php';
$consulta = $cn->query("select*from tbl_imgclasse where cd_classe='$cd_classe'");
?>

<img class="foto2" id=featured src="./img/<?php echo $exibe['img_classe']?>">
	<div id="content-wrapper">
		<div class="column">
            
			
            <div id="slide-wrapper" >
                <img id="slideLeft" class="arrow" src="./img/icon/arrow-left.png">
                <div id="slider">
				<?php
				
				$consulta = $cn->query("select * from tbl_imgclasse where cd_classe='$cd_classe' order by img_classe");
				
				?>
				<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
					<img class="thumbnail active" src="./img/<?php echo $exibe['img_classe']?>">
				<?php }?>	
				</div>
                <img id="slideRight" class="arrow" src="./img/icon/arrow-right.png">
				
                </div>
			</div>
		</div>
        

        <script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>

