<style>
 .grid2 {
        padding: 1px;
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(auto-fit, minmax(170px, 49%));
      }
      @media only screen and (max-width: 1624px) {
      .grid2 {
        padding: 1px;
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(auto-fit, minmax(170px, 100%));
      }
    }

.divhover {
  background-color: yellow;
  padding: 2px;
  display: none;
}
.hovinnho:hover + section {
  display: block;
  width: 99%;
  grid-column-start: 1;
  grid-column-end: 3;
  position: relative;
}
.hovinnho:hover{
  background-color: yellow;
  grid-column-start: 1;
  grid-column-end: 3;
  }

@media only screen and (max-width: 1624px) {
  .divhover {
  background-color: yellow;
  padding: 2px;
  display: none;
  }
  .hovinnho:hover + section {
  display: block;
  width: 100%;
  grid-column-start: 1;
  position: relative;
  }
}



</style>

<div class=" grid2">  

<div class="divlv4 hovinnho">        

<div class="gridinho">  
<div class="flex-1"><h2>Title</h2><b>Passiva</b></div>
</div> 
    
</div>
<section class="divhover">
      <a><?php echo $exibe['ds_classe']; ?></a>
      <div class="" style="flex-basis:200px">
      <div class=""><b class="">Custo: 5</b><img src = "./img/icon/raio.png" class="img4"></div>
      <div class=""><b class="">Recarga: 2</b><img src = "./img/icon/timer3.png" class="img4"></div>
      </div>     
      </section>  
<div class="divlv4 hovinnho">        

<div class="gridinho">  
<div class="flex-1"><h2>Title</h2><b>Passiva</b></div>
</div> 
    
</div>
<section class="divhover">
      <a><?php echo $exibe['ds_classe']; ?></a>
      <div class="" style="flex-basis:200px">
      <div class=""><b class="">Custo: 5</b><img src = "./img/icon/raio.png" class="img4"></div>
      <div class=""><b class="">Recarga: 2</b><img src = "./img/icon/timer3.png" class="img4"></div>
      </div>     
      </section>  

      <div class="divlv4 hovinnho">        

<div class="gridinho">  
<div class="flex-1"><h2>Title</h2><b>Passiva</b></div>
</div> 
    
</div>
<section class="divhover">
      <a><?php echo $exibe['ds_classe']; ?></a>
      <div class="" style="flex-basis:200px">
      <div class=""><b class="">Custo: 5</b><img src = "./img/icon/raio.png" class="img4"></div>
      <div class=""><b class="">Recarga: 2</b><img src = "./img/icon/timer3.png" class="img4"></div>
      </div>     
      </section>

      <div class="divlv4 hovinnho">        

<div class="gridinho">  
<div class="flex-1"><h2>Title</h2><b>Passiva</b></div>
</div> 
    
</div>
<section class="divhover">
      <a><?php echo $exibe['ds_classe']; ?></a>
      <div class="" style="flex-basis:200px">
      <div class=""><b class="">Custo: 5</b><img src = "./img/icon/raio.png" class="img4"></div>
      <div class=""><b class="">Recarga: 2</b><img src = "./img/icon/timer3.png" class="img4"></div>
      </div>     
      </section>

</div>




