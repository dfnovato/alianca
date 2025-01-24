<?php
include 'conexao.php';

$consulta = $cn->query("select * from tbl_classe");
?>

<h2>Inclusão de Classes</h2>
				
				<form method="post" action="CadastroClasse.php" name="incluiClasse" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="txtnome">Nome da Classe</label>
						<input name="txtnome" type="text" class="form-control" required id="txtnome">
					</div>
					
					<div class="form-group">					
					
					<label for="tipoclasse">Classe</label>
					
					<select class="form-control" name="tipoclasse">
                    <option value="">Selecione</option>
                    <?php while($listaClasse = $consulta->fetch(PDO::FETCH_ASSOC)) { ; ?>
					  
					  <option value="<?php echo $listaClasse['tipo_classe'];?>"><?php echo $listaClasse['nm_classe'];?></option>			
                      <?php } ?>		
					</select>
			
					</div>				


					<div class="form-group">
					<label for="txtdescricao">descrição</label>
					<input type="text" class="form-control"  name="txtdescricao"  required id="txtdescricao">
					</div>

					<div class="form-group">
					<label for="forclasse">Força</label>
					<input type="number" class="form-control"  name="forclasse"  required id="forclasse">
					</div>

					<div class="form-group">
					<label for="dexclasse">Destreza</label>
					<input type="number" class="form-control"  name="dexclasse"  required id="dexclasse">
					</div>
                    
                    <div class="form-group">
					<label for="intclasse">Inteligencia</label>
					<input type="number" class="form-control"  name="intclasse"  required id="intclasse">
					</div>

                    <div class="form-group">
					<label for="lifeclasse">Vida</label>
					<input type="number" class="form-control"  name="lifeclasse"  required id="lifeclasse">
					</div>

                    <div class="form-group">
					<label for="manaclasse">Mana</label>
					<input type="number" class="form-control"  name="manaclasse"  required id="manaclasse">
					</div>

					<div class="form-group">
					<label for="charclasse">Carisma</label>
					<input type="number" class="form-control"  name="charclasse"  required id="charclasse">
					</div>

					<div class="form-group">
					<label for="resforclasse">Resistencia Força</label>
					<input type="number" class="form-control"  name="resforclasse"  required id="resforclasse">
					</div>

					<div class="form-group">
					<label for="resdexclasse">Resistencia Agilidade</label>
					<input type="number" class="form-control"  name="resdexclasse"  required id="resdexclasse">
					</div>

					<div class="form-group">
					<label for="resintclasse">Resistencia Inteligencia</label>
					<input type="number" class="form-control"  name="resintclasse"  required id="resintclasse">
					</div>

					<div class="form-group">
					<label for="cresforclasse">Crescimento Força</label>
					<input type="number" class="form-control"  name="cresforclasse"  required id="cresforclasse">
					</div>

					<div class="form-group">
					<label for="cresdexclasse">Crescimento Agilidade</label>
					<input type="number" class="form-control"  name="cresdexclasse"  required id="cresdexclasse">
					</div>

					<div class="form-group">
					<label for="cresintclasse">Crescimento Inteligencia</label>
					<input type="number" class="form-control"  name="cresintclasse"  required id="cresintclasse">
					</div>

					<div class="form-group">
					<label for="creslifeclasse">Crescimento de Vida</label>
					<input type="number" class="form-control"  name="creslifeclasse"  required id="creslifeclasse">
					</div>

					<div class="form-group">
					<label for="cresmanaclasse">Crescimento de Mana</label>
					<input type="number" class="form-control"  name="cresmanaclasse"  required id="cresmanaclasse">
					</div>

					<div class="form-group">
					<label for="cdvanclasse">Codigo Vantangem</label>
					<input type="number" class="form-control"  name="cdvanclasse"  required id="cdvanclasse">
					</div>

					<div class="form-group">
					<label for="cddesclasse">Codigo desvantagem</label>
					<input type="number" class="form-control"  name="cddesclasse"  required id="cddesclasse">
					</div>


					<div class="form-group">
					
					<input type="file" accept="image/*" class="" name="txtfoto1" required id="txtfoto1">

					</div>

							
				<button type="submit" class="btn btn-danger">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar </span>
					
				</button>
				
				</form>
                