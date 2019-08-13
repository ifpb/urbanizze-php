<?php /* Template Name: */ ?>
<?php include("header.php"); ?>

<!-- sobre -->
<section class="consulta pageforms">
	<div class="container-fluid px-sm-0">
		<div class="row">
			<div class="col-12 col-sm-5 pr-sm-0 d-flex align-items-center">
				<!-- <input id="pac-input" class="form-control controls" type="text" placeholder="Search Box"> -->
				<div class="boxs-esq">
					<h5 class="titulos-boxmin">FAÇA SUA CONSULTA</h5>
					<h2 class="titulos-medio">Quer saber o que é possível construir no seu terreno?</h2>
					<div class="form-group mt-4 mt-sm-3 mb-0">
						<p class="step d-none d-sm-block">1/4</p>
						<form action="desenhe.php"  methode="post" class="needs-validation" novalidate>
						<input type="text" class="form-control" placeholder="DIGITE SEU ENDEREÇO" required>
						<div class="invalid-feedback">
						Informe seu endereço
						</div>
						<button type="submit" class="btn btn-primary mt-5">Buscar</button>
						</form>
					</div>
				</div>
			</div>
			<div class="mapa col-12 col-sm-7 pl-0 d-none d-sm-block">
				<div id="map"></div>
			</div>		
		</div>
	</div>
</section>		
<!-- //sobre -->

<?php include("footer.php"); ?>
