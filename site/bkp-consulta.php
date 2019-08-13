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
