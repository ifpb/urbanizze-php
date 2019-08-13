<?php /* Template Name: */ ?>
<?php include("header.php"); ?>

<!-- sobre -->
<section class="consulta pageforms">
	<div class="container-fluid px-sm-0">
		<div class="row">
			<div class="col-12 col-sm-5 pr-sm-0 d-flex align-items-center">
				<!-- <input id="pac-input" class="form-control controls" type="text" placeholder="Search Box"> -->
				<div class="boxs-esq">
					<h5 class="titulos-boxmin">DESENHE</h5>
					<img src="img/desenhe.jpg" alt="">
					<p class="my-3 d-none d-sm-block step">2/4</p>
					<p class="mb-0">Para registar sua busca no sistema, desenhe o formato do seu terreno sobre a imagem do mapa utilizando a ferramenta "draw a poligon".</p>
					<div class="form-group mb-0">
						<form action="especifique.php" methode="post">
							<button type="submit" class="btn btn-primary mt-4">Avançar</button>
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
