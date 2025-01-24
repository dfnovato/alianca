<head>
<link rel="stylesheet" href="./css/nav.css"/>
<link rel="stylesheet" href="/css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
</head>

<body class="cor1">

<?php
session_start();
include 'conexao.php';
$consulta = $cn->query('select*from tbl_classe order by tipo_classe');
?>
<?php include 'nav.php' ?>   
<main>
<div class="container">

<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
  extract($exibe);
  ?>

    <a href ="modalclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="divlv1 link1 <?php echo "link". $exibe['tipo_classe']; ?>">
     <div class="">
  <img class="foto" src="./img/<?php echo $img_classe?>" alt="">
  <div class="textinho">
  
    <h2 ><?php echo $nm_classe ?></h2>
    <p><?php echo $exibe['ds_classe']; ?></p>
  </div>
</div>
</a>    

  <?php }?>

  <br>  
</div>
<script>
</script>
</main>
</body>