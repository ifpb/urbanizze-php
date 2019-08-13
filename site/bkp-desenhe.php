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
				<input id="pac-input" class="form-control controls" type="text" placeholder="Digite seu endereço">
				<div id="map"></div>
				<div style="display: none">
			      <div id="info-content">
			        <table>
			          <tr id="iw-url-row" class="iw_table_row">
			            <td id="iw-icon" class="iw_table_icon"></td>
			            <td id="iw-url"></td>
			          </tr>
			          <tr id="iw-address-row" class="iw_table_row">
			            <td class="iw_attribute_name">Endereço:</td>
			            <td id="iw-address"></td>
			          </tr>
			          <tr id="iw-phone-row" class="iw_table_row">
			            <td class="iw_attribute_name">Telefone:</td>
			            <td id="iw-phone"></td>
			          </tr>
			          <tr id="iw-rating-row" class="iw_table_row">
			            <td class="iw_attribute_name">Classificação:</td>
			            <td id="iw-rating"></td>
			          </tr>
			          <tr id="iw-website-row" class="iw_table_row">
			            <td class="iw_attribute_name">Site:</td>
			            <td id="iw-website"></td>
			          </tr>
			        </table>
			      </div>
			    </div>
			</div>		
		</div>
	</div>
</section>		
<!-- //sobre -->

<?php include("footer.php"); ?>
