<?php
include 'conexao.php';
$consulta = $cn->query("select*from vw_magias_classe where cd_classe='$cd_classe'");
?>
<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
<div class="corn1">        
<div class="hovinnho">
<div class="grid">  
<div class="flex-1"><h2><?php echo $exibe['nm_magia'] ?></h2><b><?php echo $exibe['tp_magia'] ?></b> </div>
</div> 
        </div>
        <section class="divhover">
      <b><?php echo $exibe['ds_magia']; ?></b>
      <div class="" style="flex-basis:200px">
      
      <div class="grid titulo2">
      <h2> Lvl <?php echo $exibe['lvl_magia']; ?></h2>
      <div class="fonterpg"> Dano: <?php echo $exibe['dano_magia']; ?> % </div>
      <table>
        <tr>
        <th> <div class="titlecontainer"> <img src = "./img/icon/raio.png" class="img4"> <div class="titulo3">Custo</div> </div></th>
        <th> <div class="titlecontainer"> <img src = "./img/icon/timers.svg" class="img4"> <div class="titulo3">Recarga</div> </div></th>
        <th> <div class="titlecontainer"> <img src = "./img/icon/distance.svg" class="img4"> <div class="titulo3">Distancia</div> </div> </th>
        <th> <div class="titlecontainer"> <img src = "./img/icon/area2.svg" class="img4"> <div class="titulo3">Area</div> </div> </th>
        </tr>
        <tr>
          <td> <?php echo $exibe['custo_magia']; ?> </td>
          <td> <?php echo $exibe['recarga_magia']; ?> </td>
          <td> <?php echo $exibe['distancia_magia']; ?> </td>
          <td> <?php echo $exibe['area_magia']; ?> </td>
        </tr>
      </table>
      </div>
      </div>     
      </section>
</div>



  <?php }?>	