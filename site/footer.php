
	</main>
    <!-- /conteudo -->

    <!-- footer -->
	<?php if ($page!="index.php" && $page!="login.php" && $page!="consulta.php" && $page!="especifique.php") { ?>
	<footer id="footer">
		<div class="container-wrap">
			<div class="row">
				<div class="col-12 col-sm-5 col-xl-4">
					<h2 class="logo"><a href="index.php" title="Urbanizze"><img src="img/logo-branco.png" alt="Urbanizze"></a></h2>	
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>	

				</div>
				<div class="col-12 col-sm-7 col-xl-8 d-sm-flex px-3 px-lg-0 px-xl-3">
					<ul class="menu nav ml-xl-auto">
						<?php if ($page != "index.php" && $page != "login.php") {?>
						<li class="nav-item">
						<a class="nav-link" href="consulta.php">Nova Consulta</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="lista.php">Lista de Consultas</a>
						</li>
						<?php } ?>
						<li class="nav-item">
						<a class="nav-link" href="sobre.php">O que oferecemos</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="login.php">Faça seu login</a>
						</li>
		            </ul>		
				</div>
			</div>
		</div>
	</footer>
	<?php } ?>
	<!-- /footer -->
</div>
<!-- /principal -->

<?php include("inc/scripts.php"); ?>
</body>
</html>