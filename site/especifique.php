<?php /* Template Name: */ ?>
<?php include("header.php"); ?>

<!-- especifique -->
<section class="especifique pageforms">
	<div class="container-wrap">
		<div class="col-12 col-sm-11 col-xl-9 mx-auto">
			<div class="boxs">
				<form id="login" action="#" method="post" class="needs-validation" novalidate>
					<div class="row">
						<div class="col-12">
							<h5 class="titulos-boxmin">ESPECIFIQUE</h5>		
						</div>
					</div>
					<div class="row">
						<div id="tipo" class="col-12 col-sm-5">
							<p class="d-none d-sm-block mb-4 step d-none d-sm-block">3/4</p>
							<h2 class="titulos-medio">Qual o tipo de edificação você deseja construir?</h2>
							<!-- <a href="" class="btn btn-vazado btn-block my-5" title="Comercial">Comercial</a> -->	
								<div class="form-group my-4 my-sm-5">
									<label for="nome" class="sr-only">Nome</label>
									<select name="especifica-tipo" class="form-control" required>
										<option value="">Selecione</option>
										<option value="Comercial">Comercial</option>
									</select>
									<div class="invalid-feedback">
									Selecione o tipo de edificação
									</div>
								</div>
								<!-- <a href="consulta.php" class="btn btn-primary" title="">Entrar</a>
								<button type="submit" class="btn btn-primary" title="Entrar">Entrar</button> -->
							<button type="button" class="btn btn-primary btn-pavimentos d-none d-sm-block" data-toggle="modal" data-target="#modal-pergunta" disabled>Enviar</button>
							<button type="button" class="btn btn-primary btn-avancar d-block d-sm-none" disabled>Avançar</button>
						</div>
						<div id="pavimentos" class="col-12 col-sm-5 mx-sm-auto mx-xl-0 ml-xl-auto">
							<p class="d-none d-sm-block mb-4 step d-none d-sm-block">4/4</p>
							<h2 class="titulos-medio">Quantos pavimentos teria sua edificação?</h2>
							<div class="form-group my-4 my-sm-5">
								<label for="nome" class="sr-only">Número</label>
								<input type="number" id="especifica-num" name="especifica-numero" class="form-control" placeholder="Digite o número" required>
								<div class="invalid-feedback">
								Digite o número
								</div>
							</div>
							<!-- <button type="submit" class="btn btn-primary btn-pavimentos d-block d-sm-none" data-toggle="modal" data-target="#modal-pergunta" disabled>Enviar</button> -->
							<!-- <a href="#" class="btn btn-primary btn-pavimentos" data-toggle="modal" data-target="#modal-pergunta" disabled>Enviar</a> -->
							<button type="button" class="btn btn-primary btn-pavimentos d-block d-sm-none" data-toggle="modal" data-target="#modal-pergunta" disabled>Enviar</button>
						</div>
					</div>
				</form>			
			</div>
		</div>
	</div>
	
</section>		
<!-- //especifique -->

<!-- Modal -->
<div class="modal fade" id="modal-pergunta" tabindex="-1" role="dialog" aria-labelledby="modal-perguntaTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h3 class="titulos-medio mb-5">Qual nome você quer dar para essa consulta?</h3>
        <form action="resultado.php" method="post" class="text-center col-12 col-sm-10 col-xl-8 mx-auto needs-validation" novalidate>
			<div class="form-group">
				<label for="nome" class="sr-only">Nome</label>
				<input type="nome" class="form-control" placeholder="DIGITE O NOME" required>
				<div class="invalid-feedback">
				Informe nome da consulta
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</form>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
