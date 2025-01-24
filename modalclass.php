<head>
<link rel="stylesheet" href="./css/nav.css"/>
<link rel="stylesheet" href="./css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
</head>


<?php
session_start();
include 'conexao.php';
$consulta = $cn->query('select*from tbl_classe');
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<?php include 'nav.php' ?>   

<?php
        $cd_classe = $_GET['cd'];
        $consulta = $cn->query("select*from tbl_classe where cd_classe='$cd_classe'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        // depois criar tratamento
        ?>
<body class="modalbody">
  <main>
<div class="modalcontainer">
<div class="divlv2 <?php switch($exibe['tipo_classe']) {case "1": echo "corn1"; break; case"2":echo "corn2"; break; case"3": echo "corn3"; break; default: echo"";}?>">
<div class="grid">
  <div class="item item-1"><div class="titulo2 fonterpg"><?php echo $exibe['nm_classe']?></div> 
  <p><?php echo $exibe['ds_classe']; ?></p>
  <?php include 'slide.php' ?>
</div>

<?php include 'classbtn.php' // BTN?>

</div>

</div>
<div class="divlv2 <?php 
$consulta = $cn->query("select*from tbl_classe where cd_classe='$cd_classe'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
switch($exibe['tipo_classe']) {case "1": echo "corn1"; break; case"2":echo "corn2"; break; case"3": echo "corn3"; break; default: echo"";}?>">
    <div class="grid">
    <div class="item item-3 gridiv fonterpg titulo2">
    <div class="item item-0">
  <div class=""> <img src = "./img/icon/vida.png" class="img3"> </div>
  <div class="fonterpg "> <?php echo $exibe['classe_life']?>+<?php echo $exibe['cres_life']?> </div>
  <br>
  <div class=""> <img src = "./img/icon/mana.png" class="img3"></div>
  <div class="fonterpg "> <?php echo $exibe['classe_mana']?>+<?php echo $exibe['cres_mana']?> </div>
    </div>
    <div class="grid titulo2">
  <caption>Resistencia</caption>
    <table>
      <tr>
    <th> Status </th>
    <th> Base </th>
    </tr>
    <tr>
      <td><img src = "./img/icon/shield.png" class="img2"></td> 
      <td><?php echo $exibe['class_res_for'] ?></td>
    </tr>

    <tr> 
    <td><img src = "./img/icon/potion.png" class="img2"></td> 
    <td><?php echo $exibe['class_res_dex'] ?></td>
    </tr>

    <tr>
    <td><img src = "./img/icon/crystal.png" class="img2"></td> 
    <td><?php echo $exibe['class_res_int'] ?></td>
    </tr>
    </table>
    
</div>
</div>

<div class="item item-4 fonterpg">
  <div class="gridiv titulo2">
    <caption>Status</caption>
    
    <table>
      <tr>
    <th> Status </th>
    <th> Base </th>
    <th> Up+ </th>
    <th>5 Nv</th>
    <th>10 Nv</th>
    </tr>
    <tr>
      <td><img src = "./img/icon/sword.png" class="img2"></td> 
      <td><?php echo $exibe['classe_for'] ?></td>
      <td>+<?php echo $exibe['cres_for'] ?></td>
      <td> <?php $soma = $exibe['classe_for']+ ($exibe['cres_for']*4); echo $soma; ?></td>
      <td> <?php $soma = $exibe['classe_for']+ ($exibe['cres_for']*9); echo $soma; ?></td>
    </tr>
    <tr> 
    <td><img src = "./img/icon/bow.png" class="img2"></td> 
    <td><?php echo $exibe['classe_dex'] ?></td>
    <td>+<?php echo $exibe['cres_dex'] ?></td>
    <td><?php $soma1 = $exibe['classe_dex']+ ($exibe['cres_dex']*4); echo $soma1; ?></td>
    <td><?php $soma1 = $exibe['classe_dex']+ ($exibe['cres_dex']*9); echo $soma1; ?></td>
    </tr>
    <tr>
    <td><img src = "./img/icon/magic.png" class="img2"></td> 
    <td><?php echo $exibe['classe_int'] ?></td>
    <td>+<?php echo $exibe['cres_int'] ?></td>
  
    <td><?php $soma2 = $exibe['classe_int']+ ($exibe['cres_int']*4); echo $soma2; ?></td>
    <td><?php $soma2 = $exibe['classe_int']+ ($exibe['cres_int']*9); echo $soma2; ?></td>
    </tr>
    </table></div>  
    </div>
    <div class="item item-5"><div class="titulo2 fonterpg">Vantanges</div> 
      <table>
      <tr>
        <th>Vantagem</th>
        <th>Descrição</th>
      </tr>
      <?php $consulta = $cn->query("select*from vw_vantagens where cd_classe='$cd_classe'");
        $exibe = $consulta;
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
          extract($exibe);
      ?>
      <tr> 
        <td><?php echo $exibe['nm_vantagem']; ?></td>
        <td><?php echo $exibe['ds_vantagem']; ?></td>
      </tr>
      <?php } ?>
      
      </table>
    </div>
    <div class="item item-6"><div class="titulo2 fonterpg">Desvantagens</div> 
     <table>
      <tr>
        <th>Vantagem</th>
        <th>Descrição</th>
      </tr>
      <?php $consulta = $cn->query("select*from vw_desvantages where cd_classe='$cd_classe'");
        $exibe = $consulta;
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
          extract($exibe);
      ?>
      <tr> 
        <td><?php echo $exibe['nm_desvantagem']; ?></td>
        <td><?php echo $exibe['ds_desvantagem']; ?></td>
      </tr>
      <?php } ?>
      
      </table>   

    </div>
    </div>
</div>

  <div class="divlv2 <?php $consulta = $cn->query("select*from tbl_classe where cd_classe='$cd_classe'");
                           $exibe = $consulta->fetch(PDO::FETCH_ASSOC); 
                           switch($exibe['tipo_classe']) {case "1": echo "corn1"; break; case"2":echo "corn2"; break; case"3": echo "corn3"; break; default: echo"";}?>">
  <div class="item item-0"><div class="titulo2 fonterpg">Magias</div> 
  
  
  </div>
  
</div>

</main>
</body>