<?php /* Template Name: */ ?>
<?php include("header.php"); ?>

<!-- resultado -->
<section class="resultado">
	<div class="container-fluid px-0">
		<div class="row">
			<div class="resultado-info col-sm-6 py-4 pr-sm-0 d-flex align-items-center order-2 order-sm-1">
				<div class="col-12 col-sm-9 mx-sm-auto px-0 mr-sm-5">
					<h2 class="titulos-medio mb-4 mb-sm-5">Seu terreno se localiza na zona urbana ZA-3 (Zona Axial Tambaú) da cidade de João Pessoa.</h2>
					<p>De acordo com o mapa de macrozoneamento dessa cidade seu terreno está numa Zona Adensável Prioritária (ZAP) onde é permitido construir até 4 (quatro) vezes a area do seu terreno.</p>
				</div>	
			</div>
			<div class="mapa col-12 col-sm-6 pl-0 ml-auto order-1 order-sm-2">
				<div id="map"></div>
			</div>		
		</div>
	</div>
	
	<div class="resultado-content">
		
		<div class="container-wrap">
			<div class="resultado-dados">
				<div class="col-12 col-sm-8 col-lg-7 mx-auto text-center">
					<h2 class="titulos-medio">Quanto ao tipo de edificação que você deseja construir</h2>
					<p class="">Sim, é permitido atividade Residencial com 4 pavimento(s) nessa área da cidade em 3 diferentes usos. São eles:</p>
				</div>
				<ul id="table-legendas">
					<li class="legenda legenda-1">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Área mínima</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-2">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Frente Mínima</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-3">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Taxa de ocupação máxima</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-4">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Altura máxima</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-5">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Afastamento frente</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-6">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Afastamento lateral</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
					<li class="legenda legenda-7">
						<img src="img/tootip-tb.jpg" alt="">
						<h4 class="legenda-titulo">Afastamento fundos</h4>
						<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
					</li>
				</ul>
				<div id="tabela" class="table-responsive-sm">
					<table class="table table-borderless">
					  <thead>
					    <tr>
					      <th scope="col">USOS</th>
					      <th scope="col">LOTE</th>
					      <th scope="col">?</th>
					      <th scope="col">EDIFICAÇÃO</th>
					      <th></th>
					      <th></th>
					      <th></th>
					      <th></th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
							<td>PERMITIDO</td>
							<td><a href="#" id="table-link-1" class="table-links" title="">ÁREA MÍNIMA</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Área mínima</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-2" class="table-links">FRENTE MÍNIMA</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Frente Mínima</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-3" class="table-links" title="">TAXA DE OCUPAÇÃO MÁXIMA (%)</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Taxa de ocupação máxima</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-4" class="table-links" title="">ALTURA MÁXIMA</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Altura máxima</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-5" class="table-links" title="">AFASTAMENTO FRENTE</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Afastamento frente</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-6" class="table-links" title="">AFASTAMENTO LATERAL</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Afastamento lateral</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
							<td><a href="#" id="table-link-7" class="table-links" title="">AFASTAMENTO FUNDOS</a>
								<div class="legenda">
									<img src="img/tootip-tb.jpg" alt="">
									<h4 class="legenda-titulo">Afastamento fundos</h4>
									<p>Corresponde ao valor mínimo a ser considerado dimensão linear do muro frontal ou testada do terreno para o uso permitido que se deseja construir.</p>
								</div>
							</td>
					    </tr>
					    <tr>
							<td><a href="" class="table-links" title="">Residencial 5</a></td>
							<td>600</td>
							<td>20</td>
							<td>30</td>
							<td>4</td>
							<td>5</td>
							<td>4</td>
							<td>4</td>
					    </tr>
					    <tr>
							<td><a href="" class="table-links" title="">Residencial 5(1)</a></td>
							<td>600</td>
							<td>20</td>
							<td>40</td>
							<td>Pilotis + 4 pv + Cobertura</td>
							<td>5</td>
							<td>4</td>
							<td>4</td>
					    </tr>
					    <tr>
							<td><a href="" class="table-links" title="">Residencial 5(1)</a></td>
							<td>600</td>
							<td>30</td>
							<td>30</td>
							<td>-</td>
							<td>5</td>
							<td>4+(h/10)</td>
							<td>4+(h/10)</td>
					    </tr>
					  </tbody>
					</table>
					<div class="text-center my-3 my-sm-5">
					<a href="#" class="btn btn-primary d-none d-sm-inline-flex" title="Imprimir">Imprimir</a>
					<a href="#" class="btn btn-primary" title="Compartilhar">Compartilhar</a>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="potencial container-wrap py-sm-5 mb-5 mb-sm-0 mt-sm-5">		
		<div class="boxs-azul text-center">
			<div class="col-12 col-sm-10 mx-auto">
				<img src="img/casa.png" alt="">
				<h2 class="titulos-medio my-4 my-sm-5">Gostaria de visualizar o potencial construtivo do seu terreno utilizando esses parâmetros da Zona Axial Tambaú?</h2>
				<a href="tutorial.php" class="btn btn-dark" title="Quero">Quero</a>	
			</div>
			
		</div>
		<p class="text-center">Todas as informações aqui apresentadas foram extraídas do Código de Urbanismo da cidade de João Pessoa. Caso deseje consultar na íntegra o documento disponível no site da prefeitura <a href="" title="">clique aqui</a>.</p>
	</div>
	
</section>		
<!-- //resultado -->

<?php include("footer.php"); ?>
