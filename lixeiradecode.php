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



<!DOCTYPE html>
<html>
<body>

<h1>Typewriter</h1>

<button onclick="typeWriter()">macaco</button>

<p id="demo"></p>

<script>
var i = 0;
var txt = 'get banana, get banana get banana';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

</body>
</html>



<html>
<style>
#mydiv {
  position: absolute;
  z-index: 9;
  background-color: #f1f1f1;
  text-align: center;
  border: 1px solid #d3d3d3;
}

#mydivheader {
  padding: 10px;
  cursor: move;
  z-index: 10;
  background-color: #2196F3;
  color: #fff;
}
</style>
<body>


<div id="mydiv">
  <div id="mydivheader">Arraste aqui</div>
  <p>mova</p>
  <p>esta</p>
  <p>porra</p>
</div>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>



</body>
</html>

